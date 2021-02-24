@extends('layouts.app')
@section('content')
    <div class="py-5 w-100">
        <div style="overflow: auto">
            <div class="container">

                <p style="font-size: 16px">
                    {{setting('site.'.\Illuminate\Support\Facades\Route::currentRouteName().'_text_kz')}}
                </p>
            </div>
        </div>
    </div>
@endsection
