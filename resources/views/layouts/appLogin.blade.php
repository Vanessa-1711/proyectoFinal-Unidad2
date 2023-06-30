<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>
        @yield('css')

        <title>Portal - @yield('titulo')</title>
        @vite ('resources/css/app.css')
        @vite ('resources/js/app.js')

        @stack('styles')

    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow" style="background-color: #dd3675">
            <div class="container mx-auto flex justify-between items-center">
                <!--Determinar a usuario no autenticado -->
                @guest
                    <!--Navegacion -->
                    <a class=" uppercase text-3xl font-black"href="">Facturas</a>
                    <nav class="flex gap-2 item-ceter" style="color: black">
                        <a class="font-bold uppercase text-gray-950  text-sm" href="{{route('login')}}">Login</a>
                    </nav>
                @endguest

            </div>
        </header>
        <section class="w-screen flex items-center justify-center">
            <div class=" mx-auto h-full">
                @yield('contenido')
            </div>
        </section>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Proyecto Final Unidad 2 - Todos los derechos reservados {{now()->year}}
        </footer> 
       
    </body>
</html>
