@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="mainRow" style="background-color: white">
        <div class="container" >



            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--Request/ask -->
                <div class="form-group">
                    <label for="InstitutionFaculty"><h3>Enter Request:</h3></label></br>

                    <textarea class="form-control" rows="6" name="question"></textarea>
                </div>
                <label for="InstitutionFaculty"><h3>Tag Field of Study:</h3></label></br>
                @include("fieldOfStudy")





                <input type="submit" name="Request" value="Request" class="btn btn-info">




            </form>

                @if($errors->any())
                <div id="err" class="container-fluid" style="padding-bottom: 20px;margin-top: 5px">
                    <span style="color: #a94442"><h3>Sorry!</h3></span>
                    @foreach($errors->all() as $error)
                        <strong><span style="color: #a94442"><li>{{$error}}</li></span></strong>
                    @endforeach
                </div>
                @endif



        </div>
    </div>

    <script>
        $("html, body").animate({ scrollTop: $('#err').offset().top }, 2000);
    </script>
@endsection




