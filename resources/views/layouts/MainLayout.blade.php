<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-700 text-white">
    <header>
        @include('layouts.navigation')
    </header>
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>