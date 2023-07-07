<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Inclusión de fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @vite ('resources/css/app.css')
    @vite ('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    
    @yield('css')

   <!-- datatables CSS básico -->
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.min.css') }}" />

    <!-- datatables estilo bootstrap 4 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">


    <!-- Título de la página -->
    <title>Portal - @yield('titulo')</title>
    <!-- Inclusión del archivo CSS generado por Vite -->
    
</head>
<body>
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
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="{{ asset('popper/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- datatables JS -->
    <script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables.min.js') }}"></script>

    <!-- para usar botones en datatables JS -->  
    <script src="{{ asset('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js') }}"></script>  
    <script src="{{ asset('datatables/JSZip-2.5.0/jszip.min.js') }}"></script>    
    <script src="{{ asset('datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>    
    <script src="{{ asset('datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-1.5.6/js/buttons.html5.min.js') }}"></script>

    <!-- código JS propìo-->    
    <script src="{{ asset('main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    

</body>
</html>
