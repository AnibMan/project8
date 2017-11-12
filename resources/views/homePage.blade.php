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



        <div class="container" style="padding-top: 50px;float: left;margin-left: 50px">

            @include("mainViews.showQuestion")
        </div>
        </div>

@stop