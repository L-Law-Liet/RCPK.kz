
<!-- Modal -->

<div class="modal_vacancy modal_code_vacancy">
    <div class="fullScreen flex-center">
        <div class="modal__box__vacancy">
            <div class="modal__head text-center">
                <button id="vacancyClose" class="modal__close__vacancy">X</button>
                <h2>Заявка на вакансию</h2>
            </div>
            <div class="modal__body">
                <form id="vacancyForm" action="{{route('bid.vacancy')}}" method="post" class="form">
                    @csrf
                    <input id="vacancyId" hidden name="vacancy_id" value="">
                    <label class="form__field"><input id="vacancyName" required type="text" name="name" placeholder="Имя" /></label>
                    <label class="form__field"><input id="vacancyPhone" required type="text" name="phone" placeholder="Телефон" /></label>
                    <label class="form__field">
                        <textarea name="text" rows="8" placeholder="Сообщение" class="p-2"
                                  style="resize: none; width: 100%;"></textarea>
                    </label>
                    <button type="submit" class="btn btn_blue modal__btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
