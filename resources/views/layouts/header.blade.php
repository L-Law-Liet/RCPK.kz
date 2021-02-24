<!-- Header -->

<header class="header">
    <div style="background: #083759; padding: 1rem 0;">
        <div class="mx-md-5 px-md-5 mx-3">
            <div class="d-flex justify-content-between flex-column flex-md-row">
                <div class="d-flex flex-md-row flex-column">
                    <div class="dropdown">
                        <button onclick="govDropdown()" class="govBtn mt-2">Государственные органы
                            <img style="vertical-align: middle;" src="{{asset('img/svg/chevron-down.svg')}}" alt="i">
                        </button>
                        <div id="govAgency" class="gov-content">
                            <a>Smth</a>
                        </div>
                    </div>
                    <img class="ml-md-5 mt-2" style="vertical-align: middle; width: 64px; height: 28px" src="{{asset('img/svg/egov.svg')}}" alt="egov">
                    <div class="ml-md-5 pl-md-2 d-inline-block" style="vertical-align: middle">
                        <div class="d-flex justify-content-start mt-md-0 mt-2">
                            <img style="vertical-align: middle;" src="{{asset('img/svg/eltanba.svg')}}" alt="eltanba">
                            <span class="ml-2" style="color: white;">Генеральная прокуратура <br> Республики Казахстан</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end flex-md-row flex-column">
                    <img class="mt-md-auto mt-2 mr-n2" style="width: 30.7px; height: 36px" src="{{asset('img/svg/whatsapp.svg')}}" alt="wp">
                    <img class="ml-md-5 mt-md-auto mt-2" style="width: 30.7px; height: 36px" src="{{asset('img/svg/instagram.svg')}}" alt="insta">
                    @guest
                        <a class="mt-2 ml-md-5" style="color: white;" href="{{route('login')}}">Войти</a>
                        <a class="mt-2 ml-md-4 pl-md-2" style="color: white;" href="{{route('registration')}}">Регистрация</a>
                    @endguest
                    @auth
                        <a class="mt-2 ml-md-5" style="color: white;" href="{{route('cabinet')}}">Кабинет</a>
                        <a class="mt-2 ml-md-4 pl-md-2" style="color: white;" href="{{route('logout')}}">Выйти</a>
                    @endauth
                    <div class="dropdown">
                        <button onclick="langDropdown()" class="d-flex mt-2 ml-md-4 pl-md-3 langBtn">
                            <span style="">
                                RU
                            </span>
                            <img class="ml-2 mt-n1" src="{{asset('img/svg/chevron-down.svg')}}" alt="i">
                        </button>
                        <div id="langAgency" class="lang-content">
                            <a href="">KZ</a>
                            <a href="">EN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4" style="background: #1F3C88;">
        <div class="mx-md-5 px-md-5 mx-3 d-flex align-items-center justify-content-between">

            <!-- Logo -->

            <div class="logo d-flex align-items-center">
                <a href="{{route('index')}}" class="logo__link"><img src="{{'/storage/'.setting('site.logo')}}" alt="Логотип"></a>
                <p class="logo__txt" style="color: white">{{setting('site.title')}}</p>
            </div>

            <!-- Navbar toggle -->
        @include('layouts.mobile.toggle')

        <!-- Box -->

            <div class="header__box d-lg-flex align-items-center">
                @include('layouts.mobile.logo')
                @include('layouts.nav')
                <div class="relations d-lg-flex align-items-center">
                    <div class="relations__links text-right">
                        <p class="relations__tel"><a style="color:#fff;" href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></p>
                    </div>
                    <div class="relations__btn"><button style="background: #fff" class="ml-md-4 p-1 px-4 btn open-modal-btn-bid">Пройти обучение</button></div>
                </div>
{{--                @include('layouts.log-in')--}}
            </div>

        </div>
    </div>
</header>
