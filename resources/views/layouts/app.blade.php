@extends("mainViews.mainHTML")

@section("content")
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

@endsection
