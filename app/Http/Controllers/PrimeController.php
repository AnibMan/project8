<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use App\Question;
use App\User;
use App\Reply;
use App\Comment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PrimeController extends Controller
{
    public function index()
    {
        if(Auth()->check()) {
            return redirect("/home");
        }else{
            $sf = Studyfield::groupBy("faculty")->pluck('faculty');
            $sfLvl = Studyfield::groupBy("level")->pluck('level');
            $que = Question::get();

            return view('homePage', compact("sf", "sfLvl" , "que"));
        }
    }

    public function questionReply( $q_id){

        $username = "";
        if(Auth::check()) {
            $username = Auth::user()->username;
        }

        $que = Question::where('q_id', $q_id )->first();
        $sf = Studyfield::where('sf_id',$que->sf_id)->first();
        $sub = Subject::where('sub_id',$que->sub_id)->first();
        $queUser = User::find($que->u_id)->username;

        $reply = Reply::where('q_id',$q_id)->get();

        $comment = Comment::where('q_id',$q_id)->get();
        //$comUser = User::where('u_id' , array_flatten($comment->u_id))->get();

        return view("postReply",compact("que","username","sf","sub","queUser","reply","comment"));
    }

    public function downloadFile($filename){
        $file= public_path(). "/PostedFiles/".$filename;
        $headers = [
            'Content-Type' => 'application/pdf',
        ];


        return response()->download($file, $filename, $headers);
    }


    public function searchResult(Request $req){
        $this->validate($req,['InstitutionDegree' => 'required']);


        $username = "";
        if(Auth::check()) {
            $username = Auth::user()->username;
        }
        $sf_id = Studyfield::where("degree",$req->InstitutionDegree)->pluck("sf_id")->first();
        $sub_id = Subject::where("sub_name",$req->InstitutionSubject)->pluck("sub_id")->first();
        $sf = Studyfield::groupBy("faculty")->pluck('faculty');
        $sfLvl = Studyfield::groupBy("level")->pluck('level');
        if($req->InstitutionSubject != ""){
        $rep = Reply::where("sf_id",$sf_id)
                ->Where("sub_id",$sub_id)->get();
        }elseif($req->InstitutionSubject == ""){
            $rep = Reply::where("sf_id",$sf_id)
                ->orWhere("sub_id",$sub_id)->get();
        }

        return view('searchResult',compact('rep','username','sf','sfLvl'));


    }




}
