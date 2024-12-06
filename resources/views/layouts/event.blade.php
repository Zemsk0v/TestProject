<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список мероприятий</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Подключение Vite -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e5d5c8;">
    <div class="container">
        <a class="navbar-brand" href="#">Мероприятия</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.html">Список мероприятий</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
            <!--<div class="col-md-4 mb-4">
                <div class="card" style="background-color: #f7f1e1;">
                    <div class="card-body">
                        <h5 class="card-title">Название мероприятия 3</h5>
                        <p class="card-text">Дата: 2024-02-10</p>
                        <p class="card-text">Описание мероприятия 3. Это краткое описание мероприятия.</p>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>-->
</body>
</html>
