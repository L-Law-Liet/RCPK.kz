
<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Col -->

            <div class="col-md-4">
                <ul class="footer__list">
                    <li class="footer__item"><a href="{{route('index')}}" class="footer__link">Главная</a></li>
                    <li class="footer__item"><a href="{{route('about')}}" class="footer__link">О нас</a></li>
                    <li class="footer__item"><a href="{{route('vacancy')}}" class="footer__link">Вакансии</a></li>
                    <li class="footer__item"><a href="{{route('news')}}" class="footer__link">Новости</a></li>
                    <li class="footer__item"><a href="{{route('faq')}}" class="footer__link">Часто задаваемые вопросы</a></li>
                </ul>
            </div>

            <!-- Col -->

            <div class="col-md-4">
                <ul class="footer__list">
                    <li class="footer__item"><a href="{{route('index')}}" class="footer__link">Обучение</a></li>
                    <li class="footer__item"><a href="{{route('contacts')}}" class="footer__link">Контакты</a></li>
                    <li class="footer__item"><a target="_blank" href="{{setting('site.ref')}}" class="footer__link">Пройти опрос</a></li>
                </ul>
            </div>

            <!-- Col -->

            <div class="col-md-4">
                <ul class="footer__list">
                    <li class="footer__item">Адрес: {{setting('site.footer_address')}}</li>
                    <li class="footer__item">{{setting('site.footer_address2')}}</li>
                    <li class="footer__item">Тел. <a href="tel:{{setting('site.footer_phone')}}" class="footer__link">{{setting('site.footer_phone')}}</a></li>
                    <li class="footer__item">Email: <a href="mailto:{{setting('site.footer_email')}}" class="footer__link">{{setting('site.footer_email')}}</a></li>
                </ul>
            </div>

        </div>
    </div>
    <p class="copyright text-center">{{setting('site.footer_text')}}</p>
</footer>
