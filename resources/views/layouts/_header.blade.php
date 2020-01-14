<!--Navbar -->
<div class="row header">
    <div class="col-sm-4">
        <div class="top-logo">
        </div>
        <b class="top-name-bold text-center mt-4">AЛМАТЫ ҚАЗАҚ МЕМЛЕКЕТТІК
            <br/>
            ГУМАНИТАРЛЫҚ - ПЕДАГОГТІК КОЛЛЕДЖ
        </b>
    </div>
    <div class="col-sm-3 text-center">
        <div class="mt-4">
            Қабылдау бөлмесі
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
            <li class="lang-li mr-4 active"><a href="javascript:cms.lang.Set('kz');" class="act">Қаз</a></li>
            <li class="lang-li mr-4"><a href="javascript:cms.lang.Set('ru');">Рус</a></li>
            <li class="lang-li mr-4"><a href="javascript:cms.lang.Set('en');">Eng</a></li>
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
                <a class="nav-link" href="{{ url('/') }}">БАСТЫ
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/') }}">ЖАҢАЛЫҚТАР</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/specialities') }}">ТАЛАПКЕРГЕ</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/gallery') }}">ГАЛЕРЕЯ</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">БАЙЛАНЫСТАР</a>
            </li>
        </ul>
        <ul class="navbar-nav nav font-weight-bold ml-auto">
            <li class="nav-item">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Іздеу жолын енгізу..."
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
