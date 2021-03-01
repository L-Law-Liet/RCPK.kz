@extends('layouts.app')
@section('content')
    <!-- Entry -->

    <section class="entry" style="margin: 4rem;">
        @if(session()->has('success'))
            <div style="background: lightgreen; padding: 1rem; margin: 2rem; border-radius: 5px; color: #1a202c">
                {{session()->get('success')}}
            </div>
        @endif
        <div class="container">
            @if($errors->any())
                <ul style="background: lightcoral; padding: 1rem; margin-bottom: 2rem; border-radius: 5px;">
                    @foreach($errors->all() as $e)
                        <li style="color: white">{{$e}}</li>
                    @endforeach
                </ul>
            @endif
            <div class="wrap">
                <h3>@lang('loc.passwd_rec')</h3>
                <form action="{{route('reset.send')}}" class="form" method="post">
                    @csrf
                    <label class="form__field">
                        <input required type="email" placeholder="@lang('loc.email')" name="email"/></label>
                    <button class="btn btn_blue form__btn">@lang('loc.send')</button>
                </form>
            </div>

        </div>
    </section>
@endsection
