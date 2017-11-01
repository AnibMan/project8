<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
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
        $username = Auth::user()->username;
        $sf = Studyfield::groupBy("faculty")->pluck('faculty');
        $sfLvl = Studyfield::groupBy("level")->pluck('level');
        return view('home',compact("sf","sfLvl","username"));
    }

    public function requestQuestion()
    {
        $username = Auth::user()->username;
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
}
