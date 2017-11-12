@extends("mainViews.mainHTML")

@section("content")

    <div class="container" style="margin-top: 130px;">
        <h2>Account Settings</h2>
        <div class="panel-group" id="accordion">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Change Info.</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body" >

                        <form class="form-horizontal" method="POST" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="row">
                                    <label for="username" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Userame :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input id="username" type="text" class="form-control" name="username" placeholder="{{ $authUser->username }}">

                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input type="submit" class="btn btn-default" name="submitUsername" value="Change">
                                        @if ($errors->has('username'))
                                            <span class="help-block" style="color: orangered">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>
                        <form class="form-horizontal" method="POST" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="row">
                                    <label for="email" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Email :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input id="email" type="text" class="form-control" name="email" placeholder="{{ $authUser->email }}">

                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input type="submit" class="btn btn-default" name="submitEmail" value="Change">
                                        @if ($errors->has('email'))
                                            <span class="help-block" style="color: orangered">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form><hr>

                        <form class="form-horizontal" method="POST" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="row">
                                    <label for="oldPass" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp; Old Password :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input id="oldPass" type="password" class="form-control" name="oldPass">
                                        @if ($errors->has('oldPass'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('oldPass') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="password" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp; Set New Password :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input id="password" type="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="password-confirm" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Confirm Password :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <input type="submit"  class="btn btn-default" value="Change" name="submitPassword">


                                    </div>
                                </div>
                            </div>

                        </form>









                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Add New Degree</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">



                        {{-------------------------------------------------------------------}}

                        <form class="form-horizontal" method="POST" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="row">
                                    <label for="InstitutionFaculty" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Faculty :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <select name="InstitutionFaculty" id="InstitutionFaculty" size="1" onchange="degreeAjax()" class="form-control">
                                            <option value="">---Select Faculty---</option>
                                            @foreach($sf as $val)
                                                <option value="{{$val}}">{{$val}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="InstitutionLevel" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Level :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <select name="InstitutionLevel" id="InstitutionLevel" size="1" onchange="degreeAjax()" class="form-control">

                                            @foreach($sfLvl as $val)
                                                <option value="{{$val}}">{{$val}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="InstitutionLevel" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label">   &nbsp;  Degree :</label>

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <select name="InstitutionDegree" id="InstitutionDegree"  size="1" class="form-control">



                                        </select>
                                    </div>

                                </div>
                            </div>
                            <script src="js/ajaxCall.js">

                            </script>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="submit" name="addDeg" value="Add New Degree" class="btn btn-success">

                                </div>
                            </div>
                        </form>





                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Delete Account</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Delete Account and all your data? <button class="btn btn-danger">DELETE</button> </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->has('success'))
        <div id="message" class="jumbotron" style="text-align: center;padding-top: 10px;padding-bottom: 10px">
            <h2 >
                                <span class="help-block">
                                      <span class="glyphicon glyphicon-ok"></span>  <strong>{{ $errors->first('success') }}</strong>
                                    </span>
            </h2>

        </div>
    @endif

    <script>
        $("html, body").animate({ scrollTop: $('#message').offset().top - 450 }, 2000);
    </script>


@stop