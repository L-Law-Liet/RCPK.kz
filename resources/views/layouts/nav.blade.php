<nav class="nav" style="background: #1F3C88; border-top: 1px solid rgba(255, 255, 255, 0.2);">
    <div class="mx-md-5 px-md-5 mx-md-3 d-flex justify-content-between">
        <div class="nav-list">
            <ul class="nav__list d-lg-flex">
                <li class="nav__item"><a href="{{route('about')}}" class="nav__link {{(Route::currentRouteName() == 'about')?'active':''}}">О РЦППК</a></li>
                <li class="nav__item"><a href="{{route('ptm')}}" class="nav__link {{(Route::currentRouteName() == 'ptm')?'active':''}}">ПТМ</a></li>
                <li class="nav__item"><a href="{{route('biot')}}" class="nav__link {{(Route::currentRouteName() == 'biot')?'active':''}}">БиОТ</a></li>
                <li class="nav__item"><a href="{{route('sez')}}" class="nav__link {{(Route::currentRouteName() == 'sez')?'active':''}}">СЭЗ</a></li>
                <li class="nav__item"><a href="{{route('antiterror')}}" class="nav__link {{(Route::currentRouteName() == 'antiterror')?'active':''}}">Антитеррор</a></li>
                <li class="nav__item"><a href="{{route('paramedika')}}" class="nav__link {{(Route::currentRouteName() == 'paramedika')?'active':''}}">Парамедика</a></li>
            </ul>
        </div>
        <div class="search-div" style="width: 80%; display: none;">
            <form style="margin-top: 5px;">
                <div class="d-flex justify-content-between">
                    <input type="text"
                           style="border-radius: 5px 0 0 5px; border: none; padding: .6rem; width: 100%;"
                           placeholder="Поиск...">
                    <button style="padding: .5rem 2rem; background: #083759; border-radius: 0 5px 5px 0;">
                        <img style="vertical-align: middle; line-height: 50px; cursor: pointer" src="{{asset('img/icons/search.png')}}" alt="search">
                    </button>
                </div>
            </form>
        </div>
        <div style="line-height: 50px;">
            <button class="close-search-btn" style="display: none; font-weight: bold; font-size: 20px; color: white; padding: .5rem;">x</button>
            <img class="search-btn" style="vertical-align: middle; line-height: 50px; cursor: pointer" src="{{asset('img/icons/search.png')}}" alt="search">
        </div>
    </div>
</nav>
