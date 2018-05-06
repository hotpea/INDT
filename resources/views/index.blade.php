<html>
    <head>
        <title>INDT - Avaliação</title>

        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

        <script src="{{ url('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ url('js/popper.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
        </nav>

        {{--@section('sidebar')--}}
            {{--This is the master sidebar.--}}
        {{--@show--}}

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
