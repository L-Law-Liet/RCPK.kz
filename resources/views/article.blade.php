@extends('layouts.app')
@section('content')

<!-- Article -->

<section class="article">
    <div class="container">

        <!-- Box -->

        <div class="box clearfix">
            @if($article->image)
                <img src="{{'/storage'.$article->image}}" alt="{{$article->title}}">
                @endif
            <div class="title">
                <h1 class="title__page">{{$article->title}}</h1>
            </div>
            <div>{!! $article->paragraph1!!}</div>
        </div>

    </div>
</section>

@endsection
