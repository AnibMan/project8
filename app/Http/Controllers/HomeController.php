<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

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
}
