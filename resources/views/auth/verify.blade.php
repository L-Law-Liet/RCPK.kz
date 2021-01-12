@extends('layouts.app')
@section('content')
        <!-- Entry -->

        <section class="entry" style="margin: 4rem;">
            @if(session()->has('message'))
                <div style="background: lightgreen; padding: 1rem; margin: 2rem; border-radius: 5px; color: #1a202c">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="container">
                <div class="wrap">
                    <h3>Отправить письмо на почту</h3>
                    <form action="{{route('verification.send')}}" class="form" method="post">
                        @csrf
                        <button class="btn btn_blue form__btn">Отправить</button>
                    </form>
                </div>

            </div>
        </section>
@endsection
