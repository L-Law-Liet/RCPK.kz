@extends('layouts.app')
@section('content')

<!-- Article -->

<section class="article">
    <div class="container">

        <!-- Box -->

        <div class="title">
            <h1 class="title__page">{{$article->title}}</h1>
        </div>
        <div class="box clearfix">
            <div>
                @if($article->image)
                    <img class="article-img" src="{{'/storage'.$article->image}}" alt="{{$article->title}}">
                @endif
                <span>
                    {!! $article->paragraph1!!}
                </span>
            </div>
        </div>

    </div>
</section>

@endsection
