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
                <h3>Восстановление пароля</h3>
                <form action="{{route('reset.send')}}" class="form" method="post">
                    @csrf
                    <label class="form__field">
                        <input required type="email" placeholder="Эл. почта" name="email"/></label>
                    <button class="btn btn_blue form__btn">Отправить</button>
                </form>
            </div>

        </div>
    </section>
@endsection
