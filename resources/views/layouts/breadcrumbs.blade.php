@isset($breadcrumbs)

    <!-- Breadcrumb -->
    @php
        $array = ['antiterror', 'council', 'paramedika', 'sez'];
    @endphp
    <nav class="breadcrumb">
        <div class="px-md-5 mx-md-5 mx-3">
            <ol class="breadcrumb__list d-flex">
                <li class="breadcrumb__item">
                    <a href="{{route('index')}}" class="{{in_array(Route::currentRouteName(), $array) ? 'text-white' : ''}}">
                        @if(app()->getLocale() == 'kz')
                            Басты бет
                        @elseif(app()->getLocale() == 'en')
                            Main
                        @else
                            Главная
                        @endif
                    </a>
                </li>
                @foreach($breadcrumbs??[] as $nav)
                    <li class="breadcrumb__item active {{in_array(Route::currentRouteName(), $array) ? 'text-white' : ''}}">
                        {{$nav}}
                    </li>
                @endforeach
            </ol>
        </div>
    </nav>

@endisset
