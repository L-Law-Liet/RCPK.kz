<p>
    Здраствуйте!
</p>
<p>
    Вы зарегистрировались на сайте <a href="{{env('APP_URL')}}">{{env('APP_NAME')}}</a>
</p>
<p>Нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты.
</p>
<a href="{{$actionUrl}}" style="border-radius: 4px; text-decoration: none; padding: 8px 18px; background: #2d3748; color: white">
    Подтвердить Адрес Эл. Почты
</a>
<p>Рекомендуем Вам сохранить это письмо.
</p>
<p>С уважением, <br>
   {{env('APP_NAME')}}
</p>
