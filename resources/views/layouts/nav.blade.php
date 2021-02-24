<nav class="nav" style="background: #1F3C88; border-top: 1px solid #ccc">
    <div class="mx-md-5 px-md-5 mx-3 d-flex justify-content-between">
        <ul class="nav__list d-lg-flex">
            <li class="nav__item"><a href="{{route('about')}}" class="nav__link {{(Route::currentRouteName() == 'about')?'active':''}}">О РЦППК</a></li>
            <li class="nav__item"><a href="{{route('ptm')}}" class="nav__link {{(Route::currentRouteName() == 'ptm')?'active':''}}">ПТМ</a></li>
            <li class="nav__item"><a href="{{route('biot')}}" class="nav__link {{(Route::currentRouteName() == 'biot')?'active':''}}">БиОТ</a></li>
            <li class="nav__item"><a href="{{route('sez')}}" class="nav__link {{(Route::currentRouteName() == 'sez')?'active':''}}">СЭЗ</a></li>
            <li class="nav__item"><a href="{{route('antiterror')}}" class="nav__link {{(Route::currentRouteName() == 'antiterror')?'active':''}}">Антитеррор</a></li>
            <li class="nav__item"><a href="{{route('paramedika')}}" class="nav__link {{(Route::currentRouteName() == 'paramedika')?'active':''}}">Парамедика</a></li>
        </ul>
        <div style="line-height: 50px;">
            <img style="vertical-align: middle; line-height: 50px; cursor: pointer" src="{{asset('img/icons/search.png')}}" alt="search">
        </div>
    </div>
</nav>
