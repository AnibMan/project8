@extends('layouts.app')

@section('content')
    <div style="background-color: whitesmoke">
        <div class="container-fluid" id="mainRow" style="background-color: white;padding-bottom: 10px">
            <div class="container" >




                <div class="jumbotron" style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px">
                    <h3 style="border-bottom: 1px solid black"> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{$queUser}}:</b> </span> </h3>

                    <h3><span class="glyphicon glyphicon-pencil"></span> {{$que->que}}</h3>

                    <div style="border-top: 1px solid black">
                        <h4>
                            <span class="label label-primary">{{$sf->degree}}</span>
                            <span class="label label-success">Semester: {{$sub->semester}}</span>
                            <span class="label label-info">Subject: {{$sub->sub_name}}</span>
                        </h4>
                    </div>
                </div>
                <button class="btn btn-default" style="margin-top: -30px">Comment</button>

                <a class="btn btn-success" href="{{url('post/'.$que->q_id)}}" style="margin-top: -30px">Post Reply</a>

            </div>
        </div>

        <!-- show all replys-->
        <div class="container" style="margin-top: 5px">
            <label><h3><b>Answers:</b></h3></label>
            <div class="row" >
                @foreach($reply as $rep)

                    <div class="col-md-8" >
                        <div  style="padding-top: 5px;padding-bottom: 0px;padding-left: 10px ;background-color: white;margin-top: 10px;border: 1px solid lightgray;border-radius: 3px;">

                            <h4> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{$queUser}}:</b> </span> </h4>
                            <div style="border-top: 1px solid darkgray">
                                <h4><span class="glyphicon glyphicon-hand-right"></span> {{$rep->rep}}</h4>
                            </div>
                            <div style="border-bottom: 1px solid darkgray">
                                <?php $extention = pathinfo($rep->attachment, PATHINFO_EXTENSION) ?>
                                @if($extention == 'jpg' or $extention == 'png' or $extention == 'JPEG' or  $extention == 'PNG' or  $extention == 'JPG')
                                    <div style="width: 50%;height:50%;text-align: center">
                                        <img src="{{asset("PostedFiles/".$rep->attachment)}}" width=75% height=75%/>
                                    </div>
                                @elseif($extention == 'pdf' or $extention == 'docx' or $extention == 'doc' or $extention == 'ppt' or $extention == 'pptx' or $extention == 'ppsx' or $extention == 'txt')
                                    <a class="btn btn-info" href="{{url('download/'.$rep->attachment)}}"> <span class="glyphicon glyphicon-download-alt"></span> Download</a>
                                @endif
                            </div>

                            <button class="btn btn-default" style="margin-top: 5px;margin-bottom: 10px">Comment</button>
                        </div>


                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection




