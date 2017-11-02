@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 130px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">Userame</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>




                            <!--Field of request -->



                            <div class="form-group">
                                <label for="InstitutionFaculty" class="col-md-4 control-label">Faculty</label>
                                <div class="col-md-6">
                                    <select name="InstitutionFaculty" id="InstitutionFaculty" size="1" onchange="degreeAjax()" class="form-control">
                                        <option value="">---Select Faculty---</option>
                                        @foreach($sf as $val)
                                            <option value="{{$val}}">{{$val}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="InstitutionLevel" class="col-md-4 control-label">Level</label>
                                <div class="col-md-6">
                                    <select name="InstitutionLevel" id="InstitutionLevel" size="1"  class="form-control">

                                        @foreach($sfLvl as $val)
                                            <option value="{{$val}}">{{$val}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>







                            <div class="form-group">
                                <label for="InstitutionDegree" class="col-md-4 control-label">Degree</label>
                                <div class="col-md-6">
                                    <select name="InstitutionDegree" id="InstitutionDegree"  size="1" class="form-control">



                                    </select>
                                </div>
                            </div>
                            <script src="js/ajaxCall.js">

                            </script>






                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
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
            </div>
        </div>
    </div>
@endsection
