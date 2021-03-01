
<!-- Modal -->

<div class="modal_vacancy modal_code_vacancy">
    <div class="fullScreen flex-center">
        <div class="modal__box__vacancy">
            <div class="modal__head text-center">
                <button id="vacancyClose" class="modal__close__vacancy">X</button>
                <h2>@lang('loc.bid_vacancy')</h2>
            </div>
            <div class="modal__body">
                <form id="vacancyForm" action="{{route('bid.vacancy')}}" method="post" class="form">
                    @csrf
                    <input id="vacancyId" hidden name="vacancy_id" value="">
                    <label class="form__field"><input id="vacancyName" required type="text" name="name" placeholder="@lang('loc.name')" /></label>
                    <label class="form__field"><input class="phone_mask" id="vacancyPhone" required type="text" name="phone" placeholder="@lang('loc.phone')" /></label>
                    <label class="form__field">
                        <textarea name="text" rows="4" placeholder="@lang('loc.message')" class="p-2"
                                  style="resize: none;"></textarea>
                    </label>
                    <button type="submit" class="btn btn_blue modal__btn">@lang('loc.send')</button>
                </form>
            </div>
        </div>
    </div>
</div>

