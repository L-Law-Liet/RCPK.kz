
<!-- Modal -->

<div class="modal_bid modal_code_bid">
    <div class="fullScreen flex-center">
        <div class="modal__box__bid">
            <div class="modal__head text-center">
                <button id="bidClose" class="modal__close__bid">X</button>
                <h2>Заявка</h2>
            </div>
            <div class="modal__body">
                <form id="bidForm" action="{{route('bid')}}" method="post" class="form">
                    @csrf
                    <label class="form__field"><input id="bidName" required type="text" name="name" placeholder="Имя" /></label>
                    <label class="form__field"><input id="bidPhone" required type="text" name="phone" placeholder="Телефон" /></label>
                    <button type="submit" class="btn btn_blue modal__btn">Отправить</button>
                </form>
                <div>
                    <h4 id="bidMess" style="text-align: center; margin-top: 1rem; color: #0037a8"></h4>
                </div>
            </div>
        </div>
    </div>
</div>