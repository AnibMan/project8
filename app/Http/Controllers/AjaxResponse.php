<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studyfield;
use App\Subject;
use Illuminate\Support\Facades\Response;

class AjaxResponse extends Controller
{
    public function getDegree($faculty,$level)
    {
        $degree = Studyfield::where([
            ["faculty","=",$faculty],
            ["level","=",$level]

        ])->pluck('degree');


        return Response::json($degree);
    }

    public function getSubject($semester,$degree)
    {
        $id = Studyfield::where("degree",$degree)->pluck('sf_id');



        $sub = Subject::where([
            ["semester","=",$semester],
            ["sf_id","=",$id[0]]

        ])->pluck('sub_name');
        return Response::json($sub);
    }
}
