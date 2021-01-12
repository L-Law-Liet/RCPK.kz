@extends('layouts.app')
@section('content')

    <!-- Entry -->

    <section class="entry">
        <div class="container">

            <!-- Wrap -->
            @if($errors->any())
                <ul style="background: lightcoral; padding: 1rem; border-radius: 5px;">
                    @foreach($errors->all() as $e)
                        <li style="color: white">{{$e}}</li>
                    @endforeach
                </ul>
                @endif

            <div class="wrap">
                <h3>Вход</h3>
                <form action="{{route('logging')}}" class="form" method="post">
                    @csrf
                    <label class="form__field">
                        <input type="text" placeholder="Эл. почта" name="email" value="{{old('email')}}"/></label>
                    <label class="form__field">
                        <input type="password" placeholder="Пароль" name="password" /></label>
                    <button class="btn btn_blue form__btn">Вход</button>
                    <p class="form__link text-center"><a href="{{route('reset.show')}}">Забыли пароль?</a></p>
                </form>
            </div>

        </div>
    </section>

@endsection
