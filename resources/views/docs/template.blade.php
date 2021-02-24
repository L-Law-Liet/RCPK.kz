@extends('layouts.app')
@section('content')
    <div class="py-5 w-100">
        <div style="overflow: auto">
            @yield('pdf')
        </div>
    </div>
@endsection
