<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="rose/favicon.ico">
    <link href="rose/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="rose/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="rose/css/animate.min.css" rel="stylesheet">
    <link href="rose/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
    <link href="rose/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body>
@section('sidebar')
@show
<div class="container">
    @yield('content')
</div>
<script src="rose/js/jquery.min.js?v=2.1.4"></script>
<script src="rose/js/bootstrap.min.js?v=3.3.5"></script>
{{--<script src="js/common.js"></script>--}}
</body>
</html>