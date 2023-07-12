<!--Crear una directiva para incluir la navegacio -->
@extends('layouts.app')

<!--Directiva para crear el contenido que se envia al contenedor (@ield) -->

<!--crear el contenido que se envia al contenedor de contenedido en el app -->
@section('contenido')
    
<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="{{asset('img/4.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="{{asset('img/5.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="{{asset('img/factura.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<!-- Tarjetas -->
<div class="flex justify-center mt-8">
        <div class="flex flex-wrap w-full max-w-6xl mx-auto">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <!-- Tarjeta 1 -->
                <div class="bg-white p-4 shadow rounded-lg hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <!-- Imagen -->
                    <img src="{{asset('img/emisora.png')}}" alt="Imagen de la empresa" class="w-full h-auto mb-4">

                    <!-- Texto "Empresa Emisora" -->
                    <h3 class="text-xl font-semibold text-center">Empresa <br> Emisora</h3>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <!-- Tarjeta 2 -->
                <div class="bg-white p-4 shadow rounded-lg hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <img src="{{asset('img/receptora.png')}}" alt="Imagen de la empresa" class="w-full h-auto mb-4">

                    <!-- Texto "Empresa Emisora" -->
                    <h3 class="text-xl font-semibold text-center">Empresa <br> Receptora</h3>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <!-- Tarjeta 3 -->
                <div class="bg-white p-4 shadow rounded-lg hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <!-- Contenido de la tarjeta 3 -->
                    <img src="{{asset('img/factura.png')}}" alt="Imagen de la empresa" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-semibold text-center">Facturas</h3>
                    <br>
                </div>
            </div>
        </div>
    </div>

    


@endsection