@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="mainRow" style="background-color: white;padding-bottom: 10px">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <input type="hidden" name="q_id" value="{{$q_id}}">

                <div class="form-group">
                    <label><h3>Post Answer:</h3></label></br>

                    <textarea class="form-control" rows="4" name="reply"></textarea>
                </div>

                <div class="form-group">

                    <label ><h3>Attach file:</h3></label></br>
                    <input class="filestyle"  name="file" type="file">
                </div>



                @if($q_id == 'self')
                    <label for="InstitutionFaculty"><h3>Tag Field of Study:</h3></label></br>
                    @include("fieldOfStudy")
                @endif
                <input type="submit" name="PostReply" value="Post" class="btn btn-info">
            </form>

        </div>
    </div>

@endsection


