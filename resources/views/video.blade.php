@extends('layouts.app')
@section('content')

    <!-- Video -->

    <section class="video">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h1 class="title__page">{{$material->title}}</h1>
            </div>

            <!-- Box -->

            <div class="box">
                <div class="video__box">
                    <iframe src="{{$material->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="video__btn text-center"><a href="{{route('test', $material->course_id)}}" class="btn btn_blue">Сдать экзамен</a></p>
            </div>

        </div>
    </section>
@endsection
