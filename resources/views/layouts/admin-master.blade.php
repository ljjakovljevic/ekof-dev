<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs/sweetalert.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <aside id="admin-sidebar" class="col-md-3">
            @section('sidebar')
                @include('partials.admin.sidebar')
            @show
        </aside>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ elixir('js/app.js') }}"></script>
<script src="{{ asset('js/libs/sweetalert-dev.js') }}"></script>
@include('partials.flash')

</body>
</html>