<p>
    Здравствуйте!
</p>
<p>Восстановление пароля с сайта {{env('APP_NAME')}}</p>
<p>Нажмите кнопку ниже, чтобы восстановить пароль.
</p>
<a href="{{route('set.show', [$user->id, $hash])}}" style="border-radius: 4px; text-decoration: none; padding: 8px 18px; background: #2d3748; color: white">
    Восстановить пароль
</a>
<p>
    Рекомендуем Вам сохранить это письмо.
</p>
<p>С уважением, <br>
    {{env('APP_NAME')}}
</p>
