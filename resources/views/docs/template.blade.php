@extends('layouts.app')
@section('content')
    @php
        $array = ['antiterror', 'council'];
    @endphp
    <div class="d-md-block d-none" style="background: url('{{asset('storage/'.str_replace('\\', '/', $block->image))}}') center no-repeat;
        background-size: cover">
        <div class="pt-2">
            @include('layouts.breadcrumbs')
        </div>
        <div class="px-md-5 mx-md-5 mx-3">
            <div class="row">
                <div class="col-md-6 my-5">
                    <div class="my-5">
                        <h1 class="{{in_array(Route::currentRouteName(), $array) ? 'text-white' : ''}}" style="font-weight: 500; font-size: 40px">{{$block->{'title_'.app()->getLocale()} }}</h1>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex justify-content-start my-4">
                            <button class="btn btn_blue open-modal-btn" style="text-transform: uppercase; padding: .5rem 3rem; font-size: 16px">
                                @lang('loc.pass_edu')
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-md-none d-block mobile-block" style="color: white !important; background: url('{{ asset('storage/'.str_replace('\\', '/', $block->image_mobile)) }}') center no-repeat;
        background-size: cover">
        @include('layouts.breadcrumbs')
        <div class="px-md-5 mx-md-5 mx-3">
            <div class="my-4">
                <h2 style="font-weight: 500; font-size: 28px; text-align: center">{{$block->{'title_'.app()->getLocale()} }}</h2>
            </div>
            <div class="d-flex justify-content-center pb-4">
                <button class="btn btn_green open-modal-btn" style="text-transform: uppercase; padding: .5rem 3rem; font-size: 16px">
                    @lang('loc.pass_edu')
                </button>
            </div>
        </div>
    </div>
    <div class="py-5 w-100">
        <div style="overflow: auto">
            <div class="px-md-5 mx-md-5 mx-3">
                @php
                    $site_text = 'site.'.\Illuminate\Support\Facades\Route::currentRouteName().'_text_'.app()->getLocale();
                @endphp
                <div class="row">
                    <div class="col-md-7 order-md-first order-last mb-4">
                        <p style="font-size: 16px;">
                            {!! $block->{'body_'.app()->getLocale()}  !!}
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-1 order-md-last order-first mb-4">
                        <div class="p-3" style="border: 1px #ccc solid; border-radius: 4px">
                            <div class="m-3">
                                <h3>Цель</h3>
                            </div>
                            <div>
                                <ul>
                                    @foreach($goals as $goal)
                                        <li class="mb-3 d-flex justify-content-start">
                                            <div style="padding: .5rem;">
                                                <div style="width: 17px; height: 1px; background: black"></div>
                                            </div>
                                            <div>{{$goal->{'body_'.app()->getLocale()} }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.modals.code')
@endsection
