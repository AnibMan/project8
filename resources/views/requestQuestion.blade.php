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
            <div class="container-fluid" style="background-color: #880000;color: white;padding-bottom: 20px">
                @if($errors->any())
                    <h3>Sorry Error Occoured:</h3>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif

            </div>

        </div>
    </div>


@endsection




