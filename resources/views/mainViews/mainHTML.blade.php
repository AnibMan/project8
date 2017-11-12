<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PUExamHelp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">




    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Footer-with-button-logo.css') }}">

    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">




</head>
<body style="background-color: whitesmoke">

@include("mainViews.navbar")
@yield('content')

<div style="padding-bottom: 150px;background-color: whitesmoke">

</div>


@include('mainViews.footer')


</body>
</html>
