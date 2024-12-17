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
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div>
    <nav class="navbar navbar-expand-sm navbar-light mb-3" id="neubar">
        <div class="navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto"> <!-- Добавляем me-auto для выравнивания влево -->
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{ route('events.main') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('events.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('events.contacts') }}">Contacts</a>
                </li>
                <li class="nav-item">
                    @if(auth()->user() && auth()->user()->role === 'admin')
                        <a class="nav-link mx-2" href="{{ route('events.index') }}">Events</a>
                    @endif
                </li>
            </ul>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </nav>
</div>
@yield('content')

</body>
</html>
