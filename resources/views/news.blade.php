@extends('layouts.app')
@section('content')

    <!-- Vacancy -->

    <section class="vacancy">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h1 class="title__page">Новости</h1>
            </div>

            <!-- List -->

            <ul class="vacancy__list">
                @foreach($news as $new)
                    <li class="vacancy__item">
                        <div class="d-flex justify-content-center">
                                <div class="news-img">
                                    @isset($new->image)
                                        <img src="{{asset('/storage/'.$new->image)}}" height="200px" alt="{{$new->title??''}}">
                                    @endisset
                                </div>
                            <div class="news-content">
                                <div class="vacancy__head">
                                    <h3>{{$new->title??''}}</h3>
                                </div>
                                <p class="vacancy__info">{!! Str::words($new->paragraph1??'', 50, '...') !!}</p>
                                <p class="vacancy__respond"><a href="{{route('article', $new->paragraph2)}}">Посмотреть</a></p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
