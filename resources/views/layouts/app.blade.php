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

        @stack('estilos')

    </head>
    <body class="bg-gray-100">
        <!--ENCABEZADO DE LA PAGINA -->
        <header class="p-5 border-b bg-white shadow" style="background-color: #af69ad;">
            <div class="container mx-auto flex justify-between items-center">
                <!--Aplicar Helper de autenticación auth para verificar si esta autenticado -->
                @auth 
                    <!--Navegacion-->
                    <nav class="flex gap-2 item-ceter" style="color: black">
                        Hola: <span class="font-normal text-gray-950">{{auth()->user()->username}}</span>
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-950 text-sm">
                                Cerrar sesión
                            </button>
                        </form>
                    </nav>
                @endauth
                <!--Determinar a usuario no autenticado -->
                @guest
                    <!--Navegacion -->
                    <a class=" uppercase text-3xl font-black"href="{{route('welcome')}}">Facturas</a>
                    <nav class="flex gap-2 item-ceter" style="color: black">
                        <a class="font-bold uppercase text-gray-950  text-sm" href="{{route('login')}}">Login</a>
                        <a class="font-bold uppercase text-gray-950  text-sm" href="{{route('portalIndex')}}">portal</a>
                    </nav>
                @endguest

            </div>
        </header>
        <!--Contenido para cada una de las vistas-->
        @yield('titulo2')
        <main class="container mx-auto mt-10">  <!--class="container mx-auto mt-10"-->
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <!--Pie de pagina -->
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Proyecto Final Unidad 2 - Todos los derechos reservados {{now()->year}}
        </footer>  
        @yield('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>    
       
    </body>
</html>
