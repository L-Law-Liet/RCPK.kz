<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Страницы</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    .container {
      width: 1200px;padding: 0 15px;margin: 0 auto;
    }
    ul, li {
      list-style: none;
    }
    ul {
      padding-left: 0;
      margin-top: 50px;
    }
    li:not(:last-child) {
      margin-bottom: 20px;
    }
    a {
      color: #3e25f9;
      font-size: 18px;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Страницы:</h1>
    <ul>
      <li><a href="{{route('index')}}" target="_blank">Главная</a></li>
      <li><a href="{{route('vacancy')}}" target="_blank">Вакансии</a></li>
      <li><a href="{{route('cabinet')}}" target="_blank">Кабинет</a></li>
      <li><a href="{{route('news')}}" target="_blank">Статья</a></li>
      <li><a href="{{route('login')}}" target="_blank">Вход</a></li>
      <li><a href="{{route('registration')}}" target="_blank">Регистрация</a></li>
      <li>=========================</li>
      <li><a href="{{route('video')}}" target="_blank">Видео</a></li>
      <li><a href="{{route('study')}}" target="_blank">Тест</a></li>
    </ul>
  </div>
</body>
</html>
