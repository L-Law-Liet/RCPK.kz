@extends('layouts.app')

@section('content')
    <!-- Intro -->
    <section class="intro">
        <div class="container sl-arrow intro__arrow">
            <button class="slick-prev">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 443.52 443.52"><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"/></svg>
            </button>
            <button class="slick-next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005"><path d="M388.418,240.923L153.751,6.256c-8.341-8.341-21.824-8.341-30.165,0s-8.341,21.824,0,30.165L343.17,256.005L123.586,475.589c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251l234.667-234.667C396.759,262.747,396.759,249.264,388.418,240.923z"/></svg>
            </button>
        </div>
        <div class="intro__sl sl-dots">
            @foreach($headers as $header)
                <!-- Item -->

                    <div class="intro__item" style="background: url({{$header->img_url}}) center/cover no-repeat;">
                        <div class="container d-flex align-items-center">
                            <div class="box">
                                <div class="title">
                                    <p class="title__h1">{{$header->title}}</p>
                                </div>
                                <p class="intro__btn"><a href="#" class="btn btn_blue">Пройти обучение</a></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>

    <!-- Community -->
    <section class="community">
        <div class="container">

            <!-- Title -->

            <div class="title text-center">
                <h2 class="title__h2">{{setting('site.comm_title')}}</h2>
                <p class="title__txt">{{setting('site.comm_text')}}</p>
            </div>

            <!-- Row -->

            <div class="row">

                @foreach($community_blocks as $block)
                    <!-- Col -->

                        <div class="col-12 col-lg-6">
                            <div class="community__item">
                                <i class="community__icon"
                                   style="background: url({{$block->img_url}}) center no-repeat;"></i>
                                {{--                        <i class="community__icon i-control"></i>--}}
                                <div class="community__box">
                                    <h3 class="community__title">{{$block->title}}</h3>
                                    <p class="community__txt">{{$block->body}}</p>
                                    <p class="community__info">{{$block->footer}}</p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Society -->

    <section class="society">
        <div class="container">

            <!-- Title -->

            <div class="title text-center">
                <h2 class="title__h2">{{setting('site.org_title')}}</h2>
            </div>

            <!-- Row -->

            <div class="row justify-content-center">
                @foreach($organization_blocks as $block)

                    <!-- Col -->

                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="society__item">
                                <i class="society__icon"
                                style="background: url({{$block->img_url}}) center no-repeat;"></i>
                                <h3 class="society__title">{{$block->title}}</h3>
                                <div class="society__info">
                                    <span class="society__percent flex-center">{{$block->percent}}%</span>
                                    <ul class="society__list">
                                        <li>{{$block->info1}}</li>
                                        <li>{{$block->info2}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Associate -->

    <section class="associate">
        <div class="container">

            <!-- Title -->

            <div class="title text-center">
                <h2 class="title__h2">{{setting('site.slider_slogan')}}</h2>
            </div>

            <!-- Sl -->

            <div class="associate__sl sl-arrow arrow-blue">
                @foreach($imgs as $img)
                    <div class="associate__item"><div class="box"><img src="{{asset('/storage/'.$img->image)}}" alt="Фото"></div></div>
                @endforeach
            </div>

            <!-- Btn -->

            <p class="associate__btn text-center"><a href="#" class="btn btn_blue">Пройти обучение</a></p>

        </div>
    </section>

    <!-- Test -->

    <section class="test">
        <div class="container">

            <!-- Title -->

            <div class="title text-center">
                <h2 class="title__h2">Проверь свои знания</h2>
            </div>

            <!-- Form -->

            <form @if(!session()->has('index_res')) action="{{route('index.res')}}" method="post" @endif class="form form__test">
                @csrf
                @include('layouts.questions')
                <p class="test__btn text-center">
                    @if(session()->has('index_res'))
                        <span style="color: #255dcf">{{session()->get('index_res')}}</span>
                    @else
                        <button type="submit" class="btn btn_blue">
                            Посмотреть результат
                        </button>
                    @endif
                </p>
            </form>

        </div>
    </section>
@endsection

