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
                                <img src="{{'/storage/'.$new->image}}" height="200px" alt="{{$new->title}}">
                            </div>
                            <div class="news-content">
                                <div class="vacancy__head">
                                    <h3>{{$new->title}}</h3>
                                </div>
                                <p class="vacancy__info">{!! substr($new->paragraph1, 0, 500) !!}</p>
                                <p class="vacancy__respond"><a href="{{route('article', $new->id)}}">Посмотреть</a></p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </section>
@endsection
