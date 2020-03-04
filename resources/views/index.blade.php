<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="main_title">Пед-колледж - @yield('title')</title>
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
    {{--@include('layouts.content.electronic-services')--}}
    <!--carousel-2-->
        @include('layouts.content.partners-carousel')
    </main>
    @include('layouts._footer')
</div>
@include('layouts.scripts')
<script>
    var _scroller;
    _scroller = function () { // scroller
        return {
            speed: 25, /*скорость, чем больше значние, тем медленнее движение*/
            direct: -1,/* -1 - движение влево, +1 - вправо*/
            position: 0,
            t: null,
            // Инициализация скроллера
            init: function () {
                var el;
                // Установка обработчика колесика мыши
                el = document.getElementById('scroller_container');
                _scroller.addEvent(el, 'mousewheel', _scroller.wheel);
                _scroller.addEvent(el, 'DOMMouseScroll', _scroller.wheel);

                _scroller.timer(_scroller.direct); // запускаю скроллер
            },

            // Обработчик колесика мыши
            wheel: function (e) {
                _scroller.stop();
                e = e ? e : window.event;
                /*var wheelElem = e.target ? e.target : e.srcElement;*/
                var wheelData = e.detail ? e.detail * -1 : e.wheelDelta / 40;

                // В движке WebKit возвращается значение в 100 раз больше
                if (Math.abs(wheelData) > 100) {
                    wheelData = Math.round(wheelData / 100);
                }
                //_scroller.scroll(wheelData*10);
                _scroller.direct = wheelData > 0 ? 1 : -1;
                _scroller.timer(_scroller.direct);
                if (window.event) {
                    e.cancelBubble = true;
                    e.returnValue = false;
                    e.cancel = true;
                }
                if (e.stopPropagation && e.preventDefault) {
                    e.stopPropagation();
                    e.preventDefault();
                }
                return false;
            },

            // Функция скроллера
            scroll: function (wheel) {
                var el = document.getElementById('scroller_container').firstElementChild;
                var o, oi, width;
                _scroller.position += wheel;
                if (wheel > 0) {
                    if (_scroller.position >= 0) { // берем последнюю картинку и вставляем ёё в начало
                        // В этот момент можно подгружать более левую картинку и удалить последнюю
                        o = el;//.firstElementChild; // контейнер с картинками
                        oi = o.lastElementChild; // последняя картинка вместе с анкором
                        width = oi.firstElementChild.clientWidth; // размер картинки
                        o.insertBefore(oi, o.firstElementChild);
                        _scroller.position -= width;
                    }
                } else {
                    o = el;//.firstElementChild; // контейнер с картинками
                    oi = o.firstElementChild; // первая картинка вместе с анкором
                    width = oi.firstElementChild.clientWidth; // размер картинки
                    if (_scroller.position < -width) { // если картинка ушла влево из зоны видимости переношу её в конец списка
                        // В этот момент можно подгружать следующую картинку и удалить первую
                        o.appendChild(oi);
                        _scroller.position += width;
                    }
                }
                el.style.left = _scroller.position + 'px';
            },
            // Таймер скроллера
            timer: function (wheel) {
                _scroller.stop();
                _scroller.t = setInterval("_scroller.scroll(" + wheel + ");", _scroller.speed);
            },
            // Остановка скроллера
            stop: function () {
                if (_scroller.t != null) {
                    clearInterval(_scroller.t);
                    _scroller.t = null;
                }
            },

            // назначить обработчик события
            addEvent: function (el, evType, fn, useCapture) {
                if (el.addEventListener) {
                    el.addEventListener(evType, fn, useCapture);
                } else if (el.attachEvent) {
                    var r = el.attachEvent('on' + evType, fn);
                } else el['on' + evType] = fn;
            }
        };
    }();
    /*if(!document.funcDomReady)document.funcDomReady=function(){_scroller.init()};
    else onDomReady(_scroller.init);*/
    window.onload = function () {
        setTimeout(_scroller.init, 100);
    }; // стартуем с задержкой, чтобы все прогрузилось

</script>
</body>
</html>
