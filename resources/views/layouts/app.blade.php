<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Default</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/'.setting('site.logo'))}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}" />
    <!-- Fonts END -->

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('libs/bootstrap/bootstrap-grid.min.css')}}" />
    <link rel="stylesheet" href="{{asset('libs/slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('libs/slick/slick.css')}}" />
    <!-- Libs END -->

    <link rel="stylesheet" href="{{asset('css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/media.css')}}" />
</head>
<body @if(!in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['index', 'news'])) class="bg-blue"@endif>
<div class="wrapper fx-column">

    <!-- Main -->

    <main class="main">
        <!-- Header -->

        <header class="header">
            <div class="container d-flex align-items-center justify-content-between">

                <!-- Logo -->

                <div class="logo d-flex align-items-center">
                    <a href="{{route('index')}}" class="logo__link"><img src="{{'/storage/'.setting('site.logo')}}" alt="Логотип"></a>
                    <p class="logo__txt">{{setting('site.title')}}</p>
                </div>

                <!-- Navbar toggle -->
                @include('layouts.mobile.toggle')

                <!-- Box -->

                <div class="header__box d-lg-flex align-items-center">
                    @include('layouts.mobile.logo')
                    @include('layouts.nav')
                    <div class="relations d-lg-flex align-items-center">
                        <div class="relations__links text-right">
                            <p class="relations__tel"><a href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></p>
                            <p class="relations__bell"><a href="tel:{{setting('site.phone')}}">Заказать звонок</a></p>
                        </div>
                        <div class="relations__btn"><button class="btn btn_blue">Пройти обучение</button></div>
                    </div>
                    @include('layouts.log-in')
                </div>

            </div>
        </header>
        @include('layouts.breadcrumbs')
        @yield('content')
    </main>

    @include('layouts.footer')
</div>

<!-- Overlay -->

<div class="overlay"></div>

<!--[if lt IE 9]>
<script src="{{asset('libs/html5shiv/es5-shim.min.js')}}"></script>
<script src="{{asset('libs/html5shiv/html5shiv.min.js')}}"></script>
<script src="{{asset('libs/html5shiv/html5shiv-printshiv.min.js')}}"></script>
<script src="{{asset('libs/respond/respond.min.js')}}"></script>
<![endif]-->
<script src="{{asset('libs/jquery/jquery-3.4.0.min.js')}}"></script>
<script src="{{asset('libs/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('libs/slick/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
