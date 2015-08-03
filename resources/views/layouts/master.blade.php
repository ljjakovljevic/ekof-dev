<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ER | @yield('title', 'Home')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs/sweetalert.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('partials.nav')
@include('partials.brand')

<div id="main-wrapper" class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <aside id="main-sidebar" class="col-md-3" style="border-left: 1px solid #dee0df;">
            @include('partials.sidebar')
        </aside>
    </div>
</div>

@include('partials.footer')

<script src="{{ elixir('js/app.js') }}"></script>
<script src="{{ asset('js/libs/sweetalert-dev.js') }}"></script>
@include('partials.flash')
</body>
</html>