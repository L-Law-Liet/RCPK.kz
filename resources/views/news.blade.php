@extends('layouts.app')
@section('content')

    <!-- Vacancy -->

    <section class="vacancy">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h1 class="title__page">@lang('loc.news')</h1>
            </div>

            <!-- List -->

            <ul class="vacancy__list">
                @foreach($news as $new)
                    <li class="vacancy__item">
                        <div class="d-flex justify-content-center flex-md-row flex-column">
                                <div class="news-img">
                                    @isset($new->image)
                                        <img src="{{asset('/storage/'.$new->image)}}" width="200px" height="200px" alt="{{$new->title??''}}">
                                    @endisset
                                </div>
                            <div class="news-content">
                                <div class="vacancy__head">
                                    <h3>{{(app()->getLocale() == 'ru')?$new->title:$new->{'title_'.app()->getLocale()} ??''}}</h3>
                                </div>
                                <p class="vacancy__info">{!! Str::words((app()->getLocale() == 'ru')?$new->paragraph1:$new->{'paragraph1_'.app()->getLocale()} ??'', 50, '...') !!}</p>
                                <p class="vacancy__respond"><a href="{{route('article', $new->paragraph2)}}">@lang('loc.watch')</a></p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
