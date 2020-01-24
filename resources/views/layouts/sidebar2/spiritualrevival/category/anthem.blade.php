<!doctype html>
<html lang="">
<head>
    <title>AҚМГПК - @yield('title')</title>
    @include('layouts.head')
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
                    @include('layouts.sidebar2.spiritualrevival.category.antem_content')
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
