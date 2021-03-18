@extends('layouts.app')
@section('content')
    <div class="py-5 w-100">
        <div style="overflow: auto">
            <div class="container">
                @php
                    $site_text = 'site.'.\Illuminate\Support\Facades\Route::currentRouteName().'_text_'.app()->getLocale();
                @endphp
                <p style="font-size: 16px; text-align: justify">
                    {!! setting($site_text) !!}
                </p>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn_blue open-modal-btn">
                    @lang('loc.pass_edu')
                </button>
            </div>
        </div>
    </div>
    @include('layouts.modals.code')
@endsection
