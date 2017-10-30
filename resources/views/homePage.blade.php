@extends("mainViews.mainHTML")

@section("content")
    <div class="container-fluid">
        <div class="row" id="mainRow" >

            <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6" id="descriptionRow">
                <h2>SEARCH. REQUEST. POST.</h2>
                <h4 style="color: white">The hub of Purvanchal University. Search notes, papers or ask problems related to the exam.</h4>

            </div>
            <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6" id="searchRow">
                <h1> @include('search')</h1>
            </div>

        </div>
    </div>
@stop