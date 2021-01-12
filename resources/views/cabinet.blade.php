@extends('layouts.app')
@section('content')

    <p class="cabinet__link text-center" style="margin-bottom: 3rem;"><a href="#" class="btn btn_blue open-modal-btn">Ввыдите код</a></p>
      <!-- Cabinet -->

      <section class="cabinet">
        <div class="container">
          <div class="row">

              @foreach($courses as $course)
                  <!-- Col -->

                      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                          <div class="cabinet__item">
                              <h3>{{$course->title}}</h3>
                              <p class="cabinet__info">
                                  {{$course->body}}
                              </p>
                              <p class="cabinet__btn"><a  @if(session()->get('course_id') == $course->id)href="{{route('video', $course->id)}}" class="btn btn_blue" @endif>Пройти курс</a></p>
                          </div>
                      </div>
                  @endforeach

          </div>
        </div>
      </section>


  <!-- Overlay -->

  <div class="overlay"></div>

    @include('layouts.modals.code')
@endsection
