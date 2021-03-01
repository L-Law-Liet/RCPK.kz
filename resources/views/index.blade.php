@extends('layouts.app')

@section('content')

    <div>
        @isset($news[0])

            <!-- News -->
                <div class="pt-5">
                    <div class="mx-md-5 px-md-5 mx-3">
                        <h2 style="color: #1565C0;">@lang('loc.news')</h2>
                        <div>
                            <div class="mb-3 d-flex justify-content-end">
                                <a href="{{route('news')}}">@lang('loc.all_news')</a>
                            </div>
                            <div class="clearfix">
                                <div class="row pr-md-0 mx-md-0 py-md-0">
                                    <div class="row divided col-md-7 col-12 mx-md-0 pl-md-0">
                                        <div class="divided col-md-6 col-12 pl-md-0 pr-md-3">
                                            <div class="news-block" style="height: calc(100% - 2rem)">
                                                <img src="{{asset('/storage/'.$news[0]->image)}}" alt="{{$news[0]->title}}">
                                                <div>
                                                    <div class="news-title">
                                                        <a style="color: black" href="{{route('article', $news[0]->paragraph2)}}">{{(app()->getLocale() == 'ru')?$news[0]->title:$news[0]->{'title_'.app()->getLocale()} }}</a>
                                                    </div>
                                                    <p class="news-date">
                                                        {{date('d.m.Y', strtotime($news[0]->created_at))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divided col-md-6 col-12 pl-md-3 pr-md-0">
                                            @isset($news[1])
                                                <div class="news-block" style="height: calc(100% - 2rem)">
                                                    <img src="{{asset('/storage/'.$news[1]->image)}}" alt="{{$news[1]->title}}">
                                                    <div>
                                                    <div class="news-title">
                                                        <a style="color: black" href="{{route('article', $news[1]->paragraph2)}}">
                                                            {{(app()->getLocale() == 'ru')?$news[1]->title:$news[1]->{'title_'.app()->getLocale()} }}
                                                        </a>
                                                    </div>
                                                        <p class="news-date">
                                                            {{date('d.m.Y', strtotime($news[1]->created_at))}}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endisset
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 pr-md-0">
                                        <div class="news-block" style="height: calc(100% - 2rem);">
                                            @for($i = 2; $i < count($news); $i++)
                                                <div class="py-1">
                                                    <p class="news-date">
                                                        {{date('d.m.Y', strtotime($news[$i]->created_at))}}
                                                    </p>
                                                    <div class="news-title">
                                                        <a style="color: black" href="{{route('article', $news[$i]->paragraph2)}}">
                                                            {{(app()->getLocale() == 'ru')?$news[$i]->title:$news[$i]->{'title_'.app()->getLocale()} }}
                                                        </a>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endisset

        <!-- Society -->

        <section class="society">
            <div class="mx-md-5 px-md-5 mx-3">


                <!-- Row -->

                <div class="d-flex justify-content-between flex-column flex-md-row">
                    <div class="certificate p-5" style="border: 1px solid #e5e5e5; border-radius: 4px">
                        <section>
                            <div>

                                <!-- Sl -->

                                <div class="associate__sl sl-arrow arrow-gray">
                                    @foreach($imgs as $img)
                                        <div class="associate__item"><div class="box"><img src="{{asset('/storage/'.$img->image)}}" alt="Фото"></div></div>
                                    @endforeach
                                </div>

                            </div>
                        </section>

                    </div>
                    <div class="orgs">
                        <div class="row justify-content-center">
                        @foreach($organization_blocks as $block)

                            <!-- Col -->

                                <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
                                    <div class="society__item">
                                        <i class="society__icon"
                                           style="background: url({{$block->img_url}}) center no-repeat;"></i>
                                        <h3 class="society__title">{{(app()->getLocale() == 'ru')?$block->title:$block->{'title_'.app()->getLocale()} }}</h3>
                                        <div class="society__info">
                                            <span class="society__percent flex-center">{{$block->percent}}%</span>
                                            <ul class="society__list">
                                                <li>{{(app()->getLocale() == 'ru')?$block->info1:$block->{'info1_'.app()->getLocale()} }}</li>
                                                <li>{{(app()->getLocale() == 'ru')?$block->info2:$block->{'info2_'.app()->getLocale()} }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection

