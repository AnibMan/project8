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
                    </div><hr>
                    @foreach($comment as $com)
                        <div class="container">
                            {{$com->com}}
                        </div>
                        <div class="container">
                            {{App\User::find($com->u_id)->username}}
                        </div>
                    @endforeach
                </div>


                <a class="btn btn-success" href="{{url('post/'.$que->q_id)}}" style="margin-top: -30px">Post Reply</a>

                <button type="button" class="btn btn-default" style="margin-top: -8px;margin-bottom: 24px" data-toggle="collapse" data-target="#demo">Comment</button>

                <div class="collapse" id="demo">
                    <div class="jumbotron">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">




                            <div class="form-group">
                                <label><h3>Post comment:</h3></label></br>

                                <textarea class="form-control" rows="4" name="comment"></textarea>
                            </div>


                            <input type="submit" name="postComment" value="Comment" class="btn btn-info">




                        </form>
                    </div>

                </div>

            </div>
        </div>

        <!-- show all replys-->
        <div class="container" style="margin-top: 5px">
            <label><h3><b>Answers:</b></h3></label>
            <div class="row" >
                @foreach($reply as $rep)

                    <div class="col-md-8" >
                        <div  style="padding-top: 5px;padding-bottom: 0px;padding-left: 10px ;background-color: white;margin-top: 10px;border: 1px solid lightgray;border-radius: 3px;">

                            <h4> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{App\User::find($rep->u_id)->username}}:</b> </span> </h4>
                            <div style="border-top: 1px solid darkgray">
                                <h4><span class="glyphicon glyphicon-tag"></span> {{$rep->rep}}</h4>
                            </div>
                            <div style="border-bottom: 1px solid darkgray;padding-bottom: 7px;overflow: hidden;max-height: 50vmax;">
                                <?php $extention = pathinfo($rep->attachment, PATHINFO_EXTENSION) ?>
                                @if($extention == 'jpg' or $extention == 'png' or $extention == 'JPEG' or  $extention == 'PNG' or  $extention == 'JPG')

                                        <img class="img-thumbnail" style="max-width: 65%"  src="{{asset("PostedFiles/".$rep->attachment)}}"/>

                                @elseif($extention == 'pdf' or $extention == 'docx' or $extention == 'doc' or $extention == 'ppt' or $extention == 'pptx' or $extention == 'ppsx' or $extention == 'txt')
                                    <h2><u><span class="glyphicon glyphicon-file"></span>{{$rep->attachment}}</u></h2>
                                    <h4><a  href="{{url('download/'.$rep->attachment)}}"> <span class="glyphicon glyphicon-download-alt"></span> Download</a></h4>
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




