<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Events</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-sm navbar-light mb-3" id="neubar">
        <div class="navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{route('events.main')}}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('events.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('events.index')}}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('events.contacts')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@yield('content')

</body>
</html>
