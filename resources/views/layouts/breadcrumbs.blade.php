@isset($breadcrumbs)

    <!-- Breadcrumb -->

    <nav class="breadcrumb">
        <div class="container">
            <ol class="breadcrumb__list d-flex">
                <li class="breadcrumb__item">
                    <a href="{{route('index')}}">Главная</a>
                </li>
                @foreach($breadcrumbs??[] as $nav)
                    <li class="breadcrumb__item active">
                        {{$nav}}
                    </li>
                @endforeach
            </ol>
        </div>
    </nav>

@endisset
