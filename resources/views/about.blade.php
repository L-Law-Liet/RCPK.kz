@extends('layouts.app')

@section('content')
    <div class="py-5">

        <div class="container">
            <div class="mb-4">
                <h2>@lang('loc.about_title')</h2>
            </div>
            <div style="border: 1px #ccc solid; padding: 2rem; border-radius: 4px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mr-4" style="border-right: 1px #ccc solid;">
                            <div>
                                <img width="265" height="172" src="{{asset('img/other/about.jpg')}}" alt="">
                            </div>
                            <div class="mt-2">
                                <h3>Name Surname</h3>
                            </div>
                            <div>
                                <span>gen prok</span>
                            </div>
                            <div class="mt-2">
                                <button style="width: 265px; border: #2b6aeb 2px solid; padding: .75rem; font-size: 18px; color: #2b6aeb; border-radius: 4px">Обратитьтся</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div>
                            <h3>@lang('loc.about')</h3>
                        </div>
                        <div>
                            <p>{{setting($text)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

