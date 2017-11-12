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
use App\Comment;
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

        $question = new Question;


        $question->sf_id = $sf_id;
        $question->u_id = $u_id;
        $question->sub_id = $sub_id;
        $question-> que = $que;
        $question->save();


        return redirect('/reply/' . $question->id);


    }



    public function post($q_id ){

        $authUser = Auth::user();
        $username = $authUser->username;
        $sf = "";
        $sfLvl = "";
        if($q_id == 'self'){
            $sf = Studyfield::groupBy("faculty")->pluck('faculty');
            $sfLvl = Studyfield::groupBy("level")->pluck('level');
        }

        return view('post',compact("username","q_id","sf","sfLvl"));
    }

    public function storePost(CreatePost $req ){

        //to upload attachment file
        $this->validate($req,['reply' => 'required','file' => 'max:3100']);
        if($req->hasFile('file')) {
            $filename = $req->file->getClientOriginalName();
            $req->file->move('PostedFiles', $filename);
        }else{
            $filename = null;
        }
        $rep = new Reply;
        $rep->u_id = Auth::user()->u_id;
        if($req->q_id != 'self'){
            $rep->q_id = $req->q_id;
            $quest = Question::where('q_id',$req->q_id)->first();
            $rep->sf_id = $quest->sf_id;
            $rep->sub_id =$quest->sub_id;
        }else{
            $this->validate($req,['InstitutionSubject' => 'required','InstitutionDegree' => 'required']);

            $rep->sf_id = Studyfield::where('degree',$req->InstitutionDegree)->pluck("sf_id")->first();
            $rep->sub_id = Subject::where('sub_name',$req->InstitutionSubject)->pluck("sub_id")->first();
        }
        $rep->rep = $req->reply;
        $rep->attachment = $filename;
        $rep->save();
        if($req->q_id != 'self') {
            return redirect('/reply/' . $req->q_id);
        }else return redirect('/home');



    }

    public function accountSettings(){
        $authUser = Auth::user();
        $username = $authUser->username;

        return view('accountSettings',compact("username","authUser"));
    }

    public function updateUser(Request $req){

        $userVal = User::where("username",Auth::user()->username)->first();
        if($req->has('submitUsername')){
            $this->validate($req,['username' => 'required|string|max:25|unique:users']);
            $userVal->username = $req->username;
            $userVal->save();
            return redirect()->back()->withErrors(['success'=>'Username Changed.']);
        }
        if($req->has('submitEmail')){
            $this->validate($req,['email' => 'required|string|email|max:255|unique:users']);
            $userVal->email = $req->email;
            $userVal->save();
            return redirect()->back()->withErrors(['success'=>'Email Changed.']);
        }
        if($req->has('submitPassword')){
            $this->validate($req,['password' => 'required|string|min:6|confirmed', 'password_confirmation' => 'required|same:password','oldPass'=> 'required']);


            if (\Hash::check($req->oldPass,$userVal->password))
            {
                $userVal->password = bcrypt($req->password);
                $userVal->save();
            }else{
                return redirect()->back()->withErrors(['oldPass'=>'Current password did not match.']);
            }
            return redirect()->back()->withErrors(['success'=>'Password Changed']);

        }




    }




    public function storeComment(Request $req,$q_id){
        $comment = new Comment;
        $comment->com = $req->comment;
        $comment->q_id = $q_id;
        $comment->u_id = Auth::user()->u_id;
        $comment->save();

        return redirect()->back();

    }




}
