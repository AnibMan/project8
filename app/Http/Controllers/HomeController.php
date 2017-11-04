<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use App\studyfield_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\CreateQuestion;
use App\Question;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authUser = Auth::user();
        $username = $authUser->username;
        $sf = Studyfield::groupBy("faculty")->pluck('faculty');
        $sfLvl = Studyfield::groupBy("level")->pluck('level');

        $sf_id = studyfield_user::where('u_id',$authUser->u_id)->pluck('sf_id')->toArray();

        $que = Question::whereIn('sf_id', array_flatten($sf_id))->get();


        return view('home',compact("sf","sfLvl","username","que","q_user"));
    }

    public function requestQuestion()
    {
        $authUser = Auth::user();
        $username = $authUser->username;
        $sf = Studyfield::groupBy("faculty")->pluck('faculty');
        $sfLvl = Studyfield::groupBy("level")->pluck('level');
        return view("requestQuestion",compact("sf","sfLvl","username"));
    }

    public function storeQuestion(CreateQuestion $request ){
        $reqDeg = $request->InstitutionDegree;
        $reqFac = $request->InstitutionFaculty;
        $reqSub = $request->InstitutionSubject;
        $reqSem = $request->InstitutionSem;
        $sf_id = Studyfield::where('degree',$reqDeg)->where('faculty',$reqFac)->pluck('sf_id')->first();
        $u_id = Auth::user()->u_id;
        $sub_id =  Subject::where('sub_name',$reqSub)->where('sf_id',$sf_id)->where('semester',$reqSem)->pluck('sub_id')->first();
        $que = $request->question;

        Question::create(
            [
                'sf_id'=>$sf_id,
                'u_id'=>$u_id,
                'sub_id'=>$sub_id,
                'que'=>$que
            ]
        );

        return redirect('/home');


    }



    public function post($q_id ){

        $authUser = Auth::user();
        $username = $authUser->username;

        return view('post',compact("username","q_id"));
    }

    public function storePost(CreatePost $req ){

        //to upload attachment file
        if($req->hasFile('file')){
            $filename = $req->file->getClientOriginalName();
            $req->file->move('PostedFiles',$filename);
            $rep = new Reply;
            $rep->u_id = Auth::user()->u_id;
            if($req->q_id != 'self'){
                $rep->q_id = $req->q_id;
            }
            $rep->rep = $req->reply;
            $rep->attachment = $filename;
            $rep->save();
            if($req->q_id != 'self') {
                return redirect('/reply/' . $req->q_id);
            }else return redirect('/home');


        }
        return 'error';
    }















}
