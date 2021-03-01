@extends('layouts.app')
@section('content')

    <!-- Vacancy -->

    <section class="vacancy">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h1 class="title__page">@lang('loc.our_vacancies')</h1>
            </div>

            <!-- List -->

            <ul class="vacancy__list">
                @foreach($vacancies as $vacancy)
                    <li class="vacancy__item">
                        <div class="vacancy__head">
                            <h3>{{(app()->getLocale() == 'ru')?$vacancy->title:$vacancy->{'title_'.app()->getLocale()}}}</h3>
                            <h3 class="vacancy__price">{{$vacancy->salary}}</h3>
                        </div>
                        <p class="vacancy__info">{{(app()->getLocale() == 'ru')?$vacancy->body:$vacancy->{'body_'.app()->getLocale()} }}</p>
                        <p class="vacancy__respond open-modal-btn-vacancy">
                            <a onclick="vacancyModal(this.id)"
                               id="{{$vacancy->id}}"
                               style="cursor: pointer">@lang('loc.click')</a>
                        </p>
                    </li>
                @endforeach
            </ul>

        </div>
    </section>
    @include('layouts.modals.vacancy')
@endsection
