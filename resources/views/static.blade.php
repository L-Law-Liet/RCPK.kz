@extends('layouts.app')
@push('head')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-iso.css')}}">
    <style>
        .panel-heading {
            background: #255dcf !important;
        }
        .panel-body {
            color: black;
        }
    </style>
@endpush
@section('content')
    <div id="bootstrap-iso" style="margin: 5rem">
        @include('layouts.parts.style')
            {!! setting($route) !!}
    </div>

@endsection
