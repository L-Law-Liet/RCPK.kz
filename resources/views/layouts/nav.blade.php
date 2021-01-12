<nav class="nav">
    <div class="container">
        <ul class="nav__list d-lg-flex">
            <li class="nav__item"><a href="{{route('index')}}" class="nav__link {{(Route::currentRouteName() == 'index')?'active':''}}">Главная</a></li>
            <li class="nav__item"><a href="{{route('index')}}" class="nav__link {{(Route::currentRouteName() == 'index')?'active':''}}">Обучение</a></li>
            <li class="nav__item"><a href="{{route('vacancy')}}" class="nav__link {{(Route::currentRouteName() == 'vacancy')?'active':''}}">Вакансии</a></li>
            <li class="nav__item"><a href="{{route('news')}}" class="nav__link {{(Route::currentRouteName() == 'news')?'active':''}}">Новости</a></li>
            <li class="nav__item"><a href="{{route('contacts')}}" class="nav__link {{(Route::currentRouteName() == 'contacts')?'active':''}}">Контакты</a></li>
        </ul>
    </div>
</nav>
