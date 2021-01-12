@extends('layouts.app')
@section('content')

    <!-- Test -->

    <section class="test p-test">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h2 class="title__page">Проверь свои знания</h2>
            </div>

            <!-- Form -->

            <form action="{{route('test.res', [$test, $course_code])}}" method="post" class="form form__test">
                @csrf
                @include('layouts.questions')
                <p class="test__btn text-center"><button type="submit" class="btn btn_blue">Посмотреть результат</button></p>
            </form>

        </div>
    </section>
@endsection
