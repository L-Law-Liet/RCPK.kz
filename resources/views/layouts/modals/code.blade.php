
<!-- Modal -->

<div class="modal modal_code">
    <div class="fullScreen flex-center">
        <div class="modal__box">
            <div class="modal__head text-center">
                <button class="modal__close">X</button>
                <h2>@lang('loc.input_code_for_activate')</h2>
            </div>
            <div class="modal__body">
                <form action="{{route('course.activate')}}" method="post" class="form">
                    @csrf
                    <label class="form__field"><input required type="text" name="code" placeholder="@lang('loc.code')" /></label>
                    <button type="submit" class="btn btn_blue modal__btn">@lang('loc.send')</button>
                </form>
            </div>
        </div>
    </div>
</div>
