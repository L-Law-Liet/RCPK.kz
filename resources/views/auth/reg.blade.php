@extends('layouts.app')
@section('content')

    <!-- Entry -->

    <section class="reg">
        <div class="container">

            <!-- Wrap -->

            <div class="wrap">
                <h3>Регистрация</h3>
                <form action="{{route('register')}}" class="form" method="post">
                    @csrf
                    <label class="form__field"><input class="@error('company_name')invalid @enderror" name="company_name" type="text" value="{{old('company_name')}}" placeholder="Наименование компании" /></label>
                    <label class="form__field"><input class="@error('fullname')invalid @enderror" name="fullname" type="text" value="{{old('fullname')}}" placeholder="Имя, Фамилия" /></label>
                    <label class="form__field"><input class="@error('position')invalid @enderror" name="position" type="text" value="{{old('position')}}" placeholder="Должность" /></label>
                    <label class="form__field"><input class="@error('phone')invalid @enderror" name="phone" type="text" value="{{old('phone')}}" placeholder="Телефон" /></label>
                    <label class="form__field"><input class="@error('email')invalid @enderror" name="email" type="text" value="{{old('email')}}" placeholder="Эл. почта" /></label>
                    <label class="form__field"><input class="@error('password')invalid @enderror" name="password" type="password" placeholder="Пароль минимум 6 символов" /></label>
                    <label class="form__field"><input name="password_confirmation" type="password" placeholder="Повторите пароль" /></label>
                    <button class="btn btn_blueBorder form__btn">Регистрация</button>
                </form>
            </div>

        </div>
    </section>

@endsection
