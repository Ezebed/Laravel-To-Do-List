<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('ToDoList.title')}}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-700 text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <main class="my-20 w-full flex flex-col items-center px-2 text-xl space-y-8">

        <h1 class="text-justify text-white text-5xl md:text-9xl font-bold drop-shadow-[0_10px_8px_rgba(99_102_241_/0.4)]">{{__('ToDoList.title')}}</h1>

        <img class=" w-[90%] md:w-[60%] shadow-2xl " src="./img/example.png" alt="ejemplo">

        <p class="">Proyecto de una lista de tareas utilizando las tecnologias:</p>
        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-x-6 font-bold">
            
            <a class="px-4 py-2 rounded-lg bg-red-500 hover:bg-red-700 border-1 border-indigo-300 cursor-pointer" href="https://laravel.com/" target="_blank">
                Laravel 10.*
            </a>
            <a class="px-4 py-2 rounded-lg bg-pink-400 hover:bg-pink-500 border-1 border-indigo-300 cursor-pointer" href="https://livewire.laravel.com/" target="_blank">
                Livewire 3.*
            </a>
            <a class="px-4 py-2 rounded-lg bg-[#fcbf24] hover:bg-[#fca924] border-1 border-indigo-300 cursor-pointer" href="https://github.com/laravel/breeze" target="_blank">
                Breeze
            </a>
            
        </div>

        <p>Realizado por Obed Villegas</p>

        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-x-6 font-bold">
            
            <a class="px-4 py-2 rounded-lg bg-stone-500 hover:bg-stone-700 border-1 border-indigo-300 cursor-pointer" href="" target="_blank">Coming Soon</a>
            <a class="px-4 py-2 rounded-lg bg-[#71b7fb] hover:bg-[#4f80b0] border-1 border-indigo-300 cursor-pointer" href="https://www.linkedin.com/in/obed-villegas-aa537b132/" target="_blank">Linkedin</a>
            <a class="px-4 py-2 rounded-lg bg-gray-800 hover:bg-gray-900 border-1 border-indigo-300 cursor-pointer" href="https://github.com/Ezebed/Laravel-To-Do-List" target="_blank">Github</a>

        </div>
    </main>
    <div id="container" class="fixed top-0 left-0 w-[90rem] h-screen flex flex-wrap z-[-1]">
        <p class="size-10 bg-slate-900 m-px"></p>
    </div>

    <script>
        let container = document.getElementById('container');

        let box = document.querySelector('#container p');

        for(let i = 0; i<600;i++){
            let newbox = box.cloneNode(true);
            container.appendChild(newbox);
            console.log(i)
        }
    </script>
</body>
</html>