@extends('layouts.app')
@section('content')

    <!-- Test -->

    <section class="test p-test">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h2 class="title__page">@lang('loc.test_knowledge')</h2>
            </div>

            <!-- Form -->

            <form action="{{route('test.res', $test)}}" method="post" class="form form__test">
                @csrf
                @include('layouts.questions')
                <p class="test__btn text-center"><button type="submit" class="btn btn_blue">@lang('loc.see_res')</button></p>
            </form>

        </div>
    </section>
@endsection
