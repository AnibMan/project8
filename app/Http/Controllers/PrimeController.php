<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use App\Question;
use App\User;
use App\Reply;

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

        return view("postReply",compact("que","username","sf","sub","queUser","reply"));
    }

    public function downloadFile($filename){
        $file= public_path(). "/PostedFiles/".$filename;
        $headers = [
            'Content-Type' => 'application/pdf',
        ];


        return response()->download($file, $filename, $headers);
    }




}
