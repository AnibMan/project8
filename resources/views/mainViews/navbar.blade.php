

<nav class="navbar navbar-default navbar-fixed-top" style="text-align: center">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="/">WebSiteName</a>

        </div>
        <form class="navbar-form navbar-right" >
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" >
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        Search
                    </button>

                </div>

            </div>
        </form>
        <div class="collapse navbar-collapse" id="myNavbar">
            @if(\Illuminate\Support\Facades\Auth::check())

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="#1e90ff"><span class="glyphicon glyphicon-education"></span> {{$username}}<span class="caret"></span></font></a>
                        <ul class="dropdown-menu">
                            <li><a href="/account"><font color="#1e90ff"><span class="glyphicon glyphicon-user"></span> Account</font></a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    <font color="#ff4500"> <span class="glyphicon glyphicon-log-out"></span>  Logout</font></a></li>


                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </ul>
                    </li>



                </ul>

            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/register"><font color="#20b2aa"> <span class="glyphicon glyphicon-user"></span>  Sign Up </font></a></li>
                    <li><a href="/login"><font color="#1e90ff"> <span class="glyphicon glyphicon-log-in"></span> Login </font></a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="#"> About</a></li>
                <li> <!-- search bar -->
                </li>
            </ul>

        </div>
    </div>
</nav>

