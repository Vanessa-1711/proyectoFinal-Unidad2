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
    <body class="bg-gray-100" style="background-image: url('{{asset('img/factura.jpg')}}'); background-size: cover; background-position: center;backdrop-filter: blur(5px);">
        <section style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                @yield('contenido')
            </div>
        </section>
       
    </body>
</html>
