<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PUExamHelp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- bootstaps -->
    <link href="css/bootstrap.min.css" type="text/css"  rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" type="text/css"  rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>

</head>
<body>

@include("mainViews.navbar")
    @yield('content')
</body>
</html>
