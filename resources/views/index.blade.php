<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="main_title">AҚМГПК - @yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{asset('img/kz-logo.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Google-fonts-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans&display=swap')}}" rel="stylesheet"/>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900')}}" rel="stylesheet"/>
    <!--<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">-->
</head>
<body id="welcome">
<div class="container">
    @include('layouts._header')
    <main>
        <!--main-content-->
        <div class="container card main-card">
            <div class="row">
                <div class="col-sm-3">
                    @include('layouts.content.left-sidebar')
                </div>
                <div class="col-sm-6">
                    @include('layouts.content.main-content')
                </div>
                <div class="col-sm-3">
                    @include('layouts.content.right-sidebar')
                </div>
            </div>
        </div>
        <!--carousel-1-->
    @include('layouts.content.electronic-services')
    <!--carousel-2-->
        @include('layouts.content.partners-carousel')
    </main>
    @include('layouts._footer')
</div>
@include('layouts.scripts')
</body>
</html>
