<!-- Extender el diseño de la aplicación principal -->
@extends('layouts.app')

<!-- Sección de contenido que se envía al contenedor (yield) -->
@section('titulo2')

    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-blak">FACTURAS</h2>
    </div>
@endsection
@section('contenido')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">

    <div class="mx-auto flex max-w-80% flex-col shadow-lg p-8 bg-white rounded-xl">
        <a href="{{route('portalIndex') }}" class="flex items-center  text-gray-500 text-sm mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1">
                <path d="M15 18l-6-6 6-6" />
            </svg>
            Volver al portal
        </a>    
        
        <table class="table table-striped table-bordered w-11/12 mx-auto text-sm text-left text-black dark:text-black border border-black" >
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-pink-300 dark:text-black" >
                <tr class="bg-violet-300 dark:border-gray-700" >
                    <th scope="col" class="p-2 border-l border-r border-black">Folio</th>
                    <th scope="col" class="p-2 border-l border-r border-black">PDF</th>
                    <th scope="col" class="p-2 border-l border-r border-black">XML</th>
                </tr>
            </thead>
            <tbody>
            @if ($facturas)
                @foreach($facturas as $factura)
                <tr class="text-center">
                    <td class="px-4 py-2 border border-gray-700">{{ $factura->folio }}</td>
                    <td class="px-4 py-2 border border-gray-700">
                        <a style="text-decoration:underline; color:rgba(63,131,248)" href="{{ route('archivosDownPortal', $factura->pdf) }}" target="_blank">{{ $factura->pdf }} 
                            <br><br>
                            <button class="custom-button" type="button">Descargar</button>
                        </a>
                    </td>
                    <td class="px-4 py-2 border border-gray-700">
                        <a style="text-decoration:underline; color:rgba(63,131,248)" href="{{route ('archivosDownPortal', $factura->xml )}}" target="_blank">{{ $factura->xml }}
                            <br>
                            <button class="custom-button" type="button">Descargar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>



@endsection