@extends('layouts.app')
@section('content')

<!-- Article -->

<section class="article">
    <div class="container">

        <!-- Box -->

        <div class="title">
            <h1 class="title__page">{{(app()->getLocale() == 'ru')?$article->title:$article->{'title_'.app()->getLocale()} }}</h1>
        </div>
        <div class="box clearfix">
            <div>
                @if($article->image)
                    <img class="article-img" src="{{'/storage'.$article->image}}" alt="{{$article->title}}">
                @endif
                <span>
                    {!! (app()->getLocale() == 'ru')?$article->paragraph1:$article->{'paragraph1_'.app()->getLocale()}!!}
                </span>
            </div>
        </div>

    </div>
</section>

@endsection
