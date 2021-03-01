@extends('layouts.app')
@section('content')

    <p class="cabinet__link text-center" style="margin-bottom: 3rem;">
        <a class="btn btn_blue open-modal-btn" style="cursor: pointer">@lang('loc.input_code')</a>

        <a class="open-modal-btn-code"
           style="display: block; margin-top: 1rem; cursor: pointer">@lang('loc.how_get_code')</a>
    </p>
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
                              </p>
                              <p class="cabinet__btn"><a  @if(session()->get('course_id') == $course->id)href="{{route('video', $course->id)}}" class="btn btn_blue" @else style="background: #777; color: white; padding: 0.5rem; cursor: not-allowed; border-radius: 4px" @endif>@lang('loc.pass_course')</a></p>
                          </div>
                      </div>
                  @endforeach

          </div>
        </div>
      </section>


  <!-- Overlay -->

  <div class="overlay"></div>

    @include('layouts.modals.code')
    @include('layouts.modals.code-help')
@endsection
