<p>
    Здравствуйте!
</p>
<p>Вы успешно сдали экзамен на сайте {{env('APP_NAME')}}</p>
<p>Курс: {{$course->title??''}}</p>
<p>Тест: {{$test??''}}</p>
<p>Ссылка на скачивание раздаточных материалов: {{$course->materials->first()->file??''}}</p>
<p>
    Рекомендуем Вам сохранить это письмо.
</p>
<p>С уважением, <br>
    {{env('APP_NAME')}}
</p>
