<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
{{--@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>--}}
<div class="container container-mobile-fluid" style="background-color: transparent;">
    {{--lorem--}}
    {{--navbarbai--}}
    {{--<a href="#">world hello</a>--}}

</div>
<!--main-->
<div class="container container-mobile-fluid">
    <div class="card main-card">
        <div class="row">
            <div class="col-sm-3 body-wrap">
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
</div>
<!--carousel-1-->
<div class="container container-mobile-fluid mt-4">
    @include('layouts.content.electronic-services')
</div>
<!--carousel-2-->
<div class="container container-mobile-fluid mt-4">
    @include('layouts.content.partners-carousel')
</div>
<!--footer-->
<div class="container container-mobile-fluid">
    @include('layouts.content.footer')
</div>
<!--End your project her-->
@include('layouts.scripts')
</body>
</html>
