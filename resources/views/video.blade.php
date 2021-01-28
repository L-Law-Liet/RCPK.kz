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
                    <video style="width: 100%" controls>
                        <source src="{{$material->video}} " type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
{{--                    <iframe src="https://rcpk-materials.s3-ap-southeast-1.amazonaws.com/videos/anti-terror-kaz.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                </div>
                <p class="video__btn text-center"><a href="{{route('test', $material->course_id)}}" class="btn btn_blue">Сдать экзамен</a></p>
            </div>

        </div>
    </section>
@endsection
