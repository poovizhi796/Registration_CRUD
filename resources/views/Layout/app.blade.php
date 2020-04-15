<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/Bootstrap.min.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" >
    </head>
    <body class="institute_app container">
        @include('layout.nav')
        <!--- Content Section ---->
        @yield('content')
        <!--- Content Section end ---->
        <!--- footer section start ---->
            <nav class="nav justify-content-center navbar navbar-light bg-primary">
                <a class="navbar-brand" href="#">All rights reserved @ layatechnology.com !copyright at 2018</a>
            </nav>
        <!--- footer section end ---->
        <script src="{{ asset('js/Bootstrap.min.js') }}" type="text/js"></script>
        <script src=" {{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src=" {{ asset('js/Popper.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert.js')}}"></script>
    </body>
</html>
