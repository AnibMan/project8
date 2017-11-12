@extends("mainViews.mainHTML")

@section("content")

    <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row" id="mainRow" >

            <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6" id="descriptionRow">

                <h2>SEARCH. REQUEST. POST.</h2>
                <h3 style="color: white">The hub of Purvanchal University. Search notes, papers or ask problems related to the exam.</h3>
                <hr>
                <h3>Request for your appeal:</h3><h2 ><a class="btn btn-info" href="/requestQuestion"><font size=4px>REQUEST</font></a></h2> <hr>

                <h3>Post and share to grow:</h3><h2 ><a class="btn btn-info" href="/post/self"> <font size=4px>Post</font></a></h2>
                <hr>

            </div>
            <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6" id="searchRow">
                <h3>Search here:</h3>
                <h1> @include('search')</h1>
            </div>


        </div>

        <!-- show all replys-->
        <div class="container" style="margin-top: 5px" id="searchR">
            <label><h3><b>Search Result:</b></h3></label>
            <div class="row" >
                @foreach($rep as $res)

                    <div class="col-md-8" >
                        <div  style="padding-top: 5px;padding-bottom: 0px;padding-left: 10px ;background-color: white;margin-top: 10px;border: 1px solid lightgray;border-radius: 3px;">

                            <h4> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{App\User::find($res->u_id)->username}}</b> </span> </h4>
                            <div style="border-top: 1px solid darkgray">
                                <h4><span class="glyphicon glyphicon-tag"></span> {{$res->rep}}</h4>
                            </div>
                            <div style="border-bottom: 1px solid darkgray;padding-bottom: 7px;overflow: hidden;max-height: 50vmax;">
                                <?php $extention = pathinfo($res->attachment, PATHINFO_EXTENSION) ?>
                                @if($extention == 'jpg' or $extention == 'png' or $extention == 'JPEG' or  $extention == 'PNG' or  $extention == 'JPG')

                                        <img class="img-thumbnail" style="max-width: 65%" src="{{asset("PostedFiles/".$res->attachment)}}"/>

                                @elseif($extention == 'pdf' or $extention == 'docx' or $extention == 'doc' or $extention == 'ppt' or $extention == 'pptx' or $extention == 'ppsx' or $extention == 'txt')
                                        <h2><u><span class="glyphicon glyphicon-file"></span>{{$res->attachment}}</u></h2>
                                        <h4><a  href="{{url('download/'.$res->attachment)}}"> <span class="glyphicon glyphicon-download-alt"></span> Download</a></h4>
                                    @endif
                            </div>

                            <button class="btn btn-default" style="margin-top: 5px;margin-bottom: 10px">Comment</button>
                        </div>


                    </div>

                @endforeach
            </div>
        </div>
    </div>
<script>
    $("html, body").animate({ scrollTop: $('#searchR').offset().top }, 1500);
</script>
@stop