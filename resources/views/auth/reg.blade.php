@extends('layouts.app')
@section('content')

    <!-- Entry -->

    <section class="reg">
        <div class="container">

            <!-- Wrap -->

            <div class="wrap">
                <h3>@lang('loc.reg')</h3>
                <form action="{{route('register')}}" class="form" method="post">
                    @csrf
                    <label class="form__field"><input class="@error('company_name')invalid @enderror" name="company_name" type="text" value="{{old('company_name')}}" placeholder="@lang('loc.company_name')" /></label>
                    <label class="form__field"><input class="@error('fullname')invalid @enderror" name="fullname" type="text" value="{{old('fullname')}}" placeholder="@lang('loc.name_surname')" /></label>
                    <label class="form__field"><input class="@error('position')invalid @enderror" name="position" type="text" value="{{old('position')}}" placeholder="@lang('loc.position')" /></label>
                    <label class="form__field"><input class="@error('phone')invalid @enderror phone_mask" name="phone" type="text" value="{{old('phone')}}" placeholder="@lang('loc.phone')" /></label>
                    <label class="form__field"><input class="@error('email')invalid @enderror" name="email" type="text" value="{{old('email')}}" placeholder="@lang('loc.email')" /></label>
                    <label class="form__field"><input class="@error('password')invalid @enderror" name="password" type="password" placeholder="@lang('loc.pass_min_6')" /></label>
                    <label class="form__field"><input name="password_confirmation" type="password" placeholder="@lang('loc.repeat_pass')" /></label>
                    <button class="btn btn_blueBorder form__btn">@lang('loc.reg')</button>
                </form>
            </div>

        </div>
    </section>

@endsection
