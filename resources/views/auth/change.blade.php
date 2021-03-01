@extends('layouts.app')
@section('content')
    <!-- Entry -->

    <section class="entry" style="margin: 4rem;">
        <div class="container">
            <div class="wrap">
                <h3>@lang('loc.passwd_change')</h3>
                <form action="{{route('set.send', $user)}}" class="form" method="post">
                    @csrf
                    <label class="form__field"><input name="password" type="password" placeholder="@lang('loc.passwd')" /></label>
                    <label class="form__field"><input name="password_confirmation" type="password" placeholder="@lang('loc.repeat_pass')" /></label>
                    <button type="submit" class="btn btn_blue form__btn">@lang('loc.send')</button>
                </form>
            </div>

        </div>
    </section>
@endsection
