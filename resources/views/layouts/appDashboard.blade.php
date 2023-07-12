<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Inclusión de fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('estilos') <!-- Agrega esta línea para imprimir los estilos -->

    @vite ('resources/css/app.css')
    @vite ('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>    
    
    



    <!-- Título de la página -->
    <title>Portal - @yield('titulo')</title>
    
</head>
<body class="bg-gray-100">
    <!-- Sección para el título específico de cada página -->
    @yield('titulo2')
    <!-- Contenedor principal -->
    <main class="container mx-auto mt-4 mb-16">
        @yield('contenido')
    </main>

    <!-- Barra de navegación inferior -->
    <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200" style="background-color: #af69ad;">
        <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
            <!-- Botón Home -->
            <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-600 group">
                <i class="fas fa-home fa-1x transition-transform duration-300 transform group-hover:-translate-y-1" style="color: #000000;"></i>
                <span class="text-sm text-while dark:text-black group-hover:text-pink-400 dark:group-hover:text-pink-400" onclick="window.location.href = '{{route('dashboard')}}'" >Dashboard</span>
            </button>
            
            <!-- Botón Agregar -->
            <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-600 group" onclick="window.location.href = '{{route('empEmisoras')}}'">
                <i class="fas fa-building transition-transform duration-300 transform group-hover:-translate-y-1" style="color: #000000;"></i>
                <span class="text-sm  dark:text-black group-hover:text-pink-400 dark:group-hover:text-pink-400">Emp emisoras</span>
            </button>
            
            <!-- Botón Registrar Factura -->
            <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-600 group" onclick="window.location.href = '{{route('regFactura')}}'">
                <i class="fas fa-file-invoice transition-transform duration-300 transform group-hover:-translate-y-1" style="color: #000000;"></i>
                <span class="text-sm  dark:text-black group-hover:text-pink-400 dark:group-hover:text-pink-400">Registrar Factura</span>
            </button>

            <!-- Botón Ver Lista -->
            <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-600 group">
                <i class="fas fa-building transition-transform duration-300 transform group-hover:-translate-y-1" style="color: #000000;"></i>
                <span class="text-sm  dark:text-black group-hover:text-pink-400 dark:group-hover:text-pink-400" onclick="window.location.href = '{{route('empReceptoras')}}'">Emp receptoras</span>
            </button>
                        
                        
            <!-- Formulario de cierre de sesión -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="inline-flex flex-col items-center justify-center px-5 mt-4 hover:bg-gray-50 dark:hover:bg-gray-600 group">
                    <i class="fas fa-sign-out-alt fa-lg transition-transform duration-300 transform group-hover:-translate-y-1" style="color: #000000;"></i>
                    <span class="text-sm  dark:text-black group-hover:text-pink-400 dark:group-hover:text-pink-400">sign out</span>
                </button>
            </form>
        </div>
    </div>

    @yield('js')

    

</body>
</html>
