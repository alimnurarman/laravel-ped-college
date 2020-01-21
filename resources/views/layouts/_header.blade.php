<!--Navbar -->
<div class="row header">
    <div class="col-sm-4">
        <div class="top-logo">
        </div>
        <b class="top-name-bold text-center mt-4">
            {{__('messages.college_name')}}
        </b>
    </div>
    <div class="col-sm-3 text-center">
        <div class="mt-4">
            {{__('messages.reception')}}
            <br/>
            <i>2-78-56-84, 2-90-87-44</i>
        </div>
    </div>
    <div class="col-sm-2 text-center mt-4">
        <a href="{{ url('president/message') }}" target="_blank">
            <img src="http://ped-kollege.kz/templates/college/static/images/modern_kz.png" alt=""
                 style="width: 140px; height: 80px;"/>
        </a>
    </div>
    <div class="col-sm-3 text-center">
        <ul class="lang mt-5">
            <li class="nav-item"><a class="nav-link" href="{{ url('locale/kz') }}">ҚАЗ</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('locale/ru') }}">РУС</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('locale/en') }}">ENG</a></li>
        </ul>
    </div>
</div>
<nav class="navbar body-wrap navbar-expand-lg navbar-dark blue-gradient">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav nav font-weight-bold mr-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/') }}">{{ __('messages.HOME') }}
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/') }}">{{ __('messages.NEWS') }}</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/specialities') }}">{{__('messages.APPLICANTS')}}</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/gallery') }}">{{__('messages.gallery')}}</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/administration') }}">{{__('messages.administration')}}</a>
            </li>
        </ul>
        <ul class="navbar-nav nav font-weight-bold ml-auto">
            <li class="nav-item">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="{{__('messages.search')}}"
                               aria-label="Search">
                    </div>
                    <a href="#" type="submit">
                        <i class="fas fa-search white-text"></i>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->
