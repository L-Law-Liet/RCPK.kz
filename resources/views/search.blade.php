@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">
            <h1 class="title__page">@lang('loc.search_results')</h1>
        </div>
        <div class="my-4" style="">
            <form action="{{route('search')}}" style="margin-top: 5px;">
                <div class="d-flex justify-content-between">
                    <input name="search" type="text"
                           style="border-radius: 5px 0 0 5px; border: 1px solid #ccc; padding: .6rem; width: 100%;"
                           placeholder="@lang('loc.search')..." value="{{ $search }}">
                    <button type="submit" style="padding: .5rem 2rem; background: #083759; border-radius: 0 5px 5px 0;">
                        <img style="vertical-align: middle; line-height: 50px; cursor: pointer" src="{{asset('img/icons/search.png')}}" alt="search">
                    </button>
                </div>
            </form>
        </div>
        <div class="my-5">
            @foreach($list as $item)
                <div class="my-3 py-2" style="border-bottom: 1px solid #ccc">
                    <h3 style="cursor: pointer"
                        onclick="window.location='{{($item['body']??'')?route('vacancy'):route('article', $item['paragraph2'])}}'"
                        class="mb-2">{{ $item[(app()->getLocale() == 'ru')?'title':'title_'.app()->getLocale()] }}</h3>
                    <div>
                        {!! Str::words($item[(app()->getLocale() == 'ru')?'body':'body_'.app()->getLocale()]??$item[(app()->getLocale() == 'ru')?'paragraph1':'paragraph1_'.app()->getLocale()]??'', 40, '...') !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

