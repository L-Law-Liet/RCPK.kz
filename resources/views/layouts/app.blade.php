<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    @php
        use App\Models\Meta;
        $meta = Meta::where('url', \Illuminate\Support\Facades\Route::currentRouteName())
        ->firstOr(function (){
            return Meta::first();
        });
    @endphp
    <meta charset="utf-8" />
    <title>{{$meta->title}}</title>
    <meta name="description" content="{{$meta->description}}">
    <meta name="keywords" content="{{$meta->keywords}}">
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
    @stack('head')
    <style>
        #lds-ring {
            display: none;
            position: fixed;
            z-index: 5000;
            left: 50%;
            top: 50%;
            width: 80px;
            height: 80px;
            margin: -40px 0 0 -40px;
        }
        #lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 8px solid #0037a8;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #0037a8 transparent transparent transparent;
        }
        #lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }
        #lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }
        #lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }
        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body @if(!in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['index', 'news'])) class="bg-blue"@endif>
<div class="wrapper fx-column">

    <div id="lds-ring"><div></div><div></div><div></div><div></div></div>
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
                        <div class="relations__btn"><button class="btn btn_blue open-modal-btn-bid">Пройти обучение</button></div>
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
@include('layouts.modals.bid')
<!--[if lt IE 9]>
<script src="{{asset('libs/html5shiv/es5-shim.min.js')}}"></script>
<script src="{{asset('libs/html5shiv/html5shiv.min.js')}}"></script>
<script src="{{asset('libs/html5shiv/html5shiv-printshiv.min.js')}}"></script>
<script src="{{asset('libs/respond/respond.min.js')}}"></script>
<![endif]-->
<script src="{{asset('libs/jquery/jquery-3.4.0.min.js')}}"></script>
<script src="{{asset('libs/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('libs/slick/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
