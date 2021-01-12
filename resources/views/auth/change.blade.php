@extends('layouts.app')
@section('content')
    <!-- Entry -->

    <section class="entry" style="margin: 4rem;">
        <div class="container">
            <div class="wrap">
                <h3>Смена пароля</h3>
                <form action="{{route('set.send', $user)}}" class="form" method="post">
                    @csrf
                    <label class="form__field"><input name="password" type="password" placeholder="Пароль минимум 6 символов" /></label>
                    <label class="form__field"><input name="password_confirmation" type="password" placeholder="Повторите пароль" /></label>
                    <button type="submit" class="btn btn_blue form__btn">Отправить</button>
                </form>
            </div>

        </div>
    </section>
@endsection
