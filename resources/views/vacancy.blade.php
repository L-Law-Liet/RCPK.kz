@extends('layouts.app')
@section('content')

    <!-- Vacancy -->

    <section class="vacancy">
        <div class="container">

            <!-- Title -->

            <div class="title">
                <h1 class="title__page">Наши вакансии</h1>
            </div>

            <!-- List -->

            <ul class="vacancy__list">
                @foreach($vacancies as $vacancy)
                    <li class="vacancy__item">
                        <div class="vacancy__head">
                            <h3>{{$vacancy->title}}</h3>
                            <h3 class="vacancy__price">{{$vacancy->salary}}</h3>
                        </div>
                        <p class="vacancy__info">{{$vacancy->body}}</p>
                        <p class="vacancy__respond open-modal-btn-vacancy">
                            <a onclick="vacancyModal(this.id)"
                               id="{{$vacancy->id}}"
                               style="cursor: pointer">Откликнуться</a>
                        </p>
                    </li>
                @endforeach
            </ul>

        </div>
    </section>
    @include('layouts.modals.vacancy')
@endsection
