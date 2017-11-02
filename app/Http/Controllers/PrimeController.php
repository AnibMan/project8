<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use App\Question;

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




}
