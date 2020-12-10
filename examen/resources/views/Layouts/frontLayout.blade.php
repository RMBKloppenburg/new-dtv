<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>DTV Doetichem</title>
    <!--Highway Template https://templatemo.com/tm-520-highway -->
    <meta name="description" content="">
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <link rel="apple-touch-icon" href="apple-touch-icon.png">--}}

    <link rel="stylesheet" href="{{asset('FrontEndassets/css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('FrontEndassets/css/bootstrap-theme.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('FrontEndassets/css/fontAwesome.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('FrontEndassets/css/light-box.css')}}">--}}
{{-- styling home page--}}
    <link rel="stylesheet" href="{{asset('FrontEndassets/css/templatemo-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">
{{--    <script src="{{asset('FrontEndassets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>--}}


</head>
<body>
<nav>
    <div class="logo">
        <a href="/">DTV </a>
    </div>
    <div class="menu-icon">
        <span></span>
    </div>
</nav>
@yield('content')

<footer>
    <div class="container-fluid">
        <div class="col-md-12">
            <p>Copyright &copy; 2020 DTV Doetinchemse tennis vereniging

                | Designed by Achterhoek programming</p>
        </div>
    </div>
</footer>

@include('Layouts.overlay-menu')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="FrontEndassets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="{{asset('FrontEndassets/js/vendor/bootstrap.min.js ')}}"></script>
<script src="{{asset('FrontEndassets/js/plugins.js')}}"></script>
<script src="{{asset('FrontEndassets/js/main.js')}}"></script>

</body>
</html>
