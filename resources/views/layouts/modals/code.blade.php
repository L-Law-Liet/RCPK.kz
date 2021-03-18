
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
                    <label class="form__field"><input id="bidName" required type="text" name="name" placeholder="@lang('loc.fullname')" /></label>
                    <label class="form__field"><input required type="email" name="email" placeholder="Email" /></label>
                    <label class="form__field"><input required type="text" name="code" placeholder="@lang('loc.code')" /></label>
                    <label class="form__field"> @lang('loc.language')
                        <select style="width: 100%; border-color: #959595; border-radius: 4px;
                         padding: .4rem 1rem; margin-top: .3rem;" name="lang">
                            <option value="ru">@lang('loc.ru_lang')</option>
                            <option value="kz">@lang('loc.kz_lang')</option>
                        </select>
                    </label>
                    <button type="submit" class="btn btn_blue modal__btn">@lang('loc.send')</button>
                </form>
            </div>
        </div>
    </div>
</div>
