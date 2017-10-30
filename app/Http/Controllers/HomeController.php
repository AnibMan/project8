<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index()
    {
        $sf = Studyfield::groupBy("faculty")->pluck('faculty');
        $sfLvl = Studyfield::groupBy("level")->pluck('level');
        return view('homePage',compact("sf","sfLvl"));
    }

    public function getDegree($faculty,$level)
    {
        $degree = Studyfield::where([
            ["faculty","=",$faculty],
            ["level","=",$level]

        ])->pluck('degree');


        return Response::json($degree);
    }

    public function getSemester($semester,$degree)
    {
        $id = Studyfield::where("degree",$degree)->pluck('sf_id');



        $sub = Subject::where([
        ["semester","=",$semester],
        ["sf_id","=",$id[0]]

    ])->pluck('sub_name');
        return Response::json($sub);
    }


}
