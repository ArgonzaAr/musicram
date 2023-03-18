<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Se agrega el archivo de tailwindcss para los estilos-->
        <title>MusiCram - @yield('Titulo')</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-slate-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/">
                    <h1 class="text-3xl font-black flex items-center">
                        <img class="w-16 mr-4" src="{{asset('img/musica_icon.png')}}" alt="icono"> MusicGram
                    </h1>
                </a>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-500 text-sm" href="{{route('login')}}">LogIn</a>
                    <a class="font-bold uppercase text-gray-500 text-sm" href="{{route('register')}}">Crear cuenta</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">@yield('Titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            MusicGram - Todos los derechos reservados 
            {{now()->year}}
        </footer>
    </body>
</html>