@extends('layouts.app')
@section('content')
    <div class="py-5 w-100">
        <div style="overflow: auto">
            <div class="container">
                @php
                    $site_text = 'site.'.\Illuminate\Support\Facades\Route::currentRouteName().'_text';
                    $site_text = (app()->getLocale() == 'ru') ? $site_text : $site_text.'_'.app()->getLocale();
                @endphp
                <p style="font-size: 16px; text-align: justify">
                    {{setting($site_text)}}
                </p>
            </div>
        </div>
    </div>
@endsection
