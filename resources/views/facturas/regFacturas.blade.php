@extends('layouts.appDashboard')

@section('titulo')
    RegFactura
@endsection

@section('titulo2')
    <!-- Título secundario de la vista -->
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-black">REGISTRAR FACTURA</h2>
    </div>
@endsection

@section('contenido')
<div class="flex justify-between items-center mb-4">
    <!-- Botón para agregar una nueva factura -->
    <h2 class="text-lg font-semibold"></h2>
    <button type="button" class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 text-white hover:text-white rounded-md px-3 py-2" onclick="window.location.href = '{{route('formFactura')}}'">
      <i class="fas fa-plus"></i>
      <span>Agregar Factura</span>
    </button>
  </div>

   <!-- Tabla para mostrar las facturas registradas -->
<div class="overflow-x-auto">
    <table id="example"  class="table table-striped table-bordered w-11/12 mx-auto text-sm text-left text-black dark:text-black border border-black">
      <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-pink-300 dark:text-black">
        <tr>
          <th scope="col" class="p-2 border-l border-r border-black">
            Id
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Empresa emisora
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Empresa Receptora
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Folio de factura
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            PDF
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            XML
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($facturas as $factura)
        <tr class="bg-white dark:border-gray-700">
          <th scope="row" class="p-2 font-medium border-l border-r border-black">
            {{ $factura->id }}
          </th>
          <td class="p-2 border-l border-r border-black">
            {{ $factura->emisora->razon }}
          </td>
          <td class="p-2 border-l border-r border-black">
          {{ optional($factura->receptora)->nombre }}
          </td>
          <td class="p-2 border-l border-r border-black">
            {{ $factura->folio }}
          </td>
          <td class="p-2 border-l border-r border-black">
            <!-- Enlace para descargar el archivo PDF de la factura -->
            <a class="flex justify-center" href="{{ route('archivosDown', $factura->pdf) }}">
              <button class="custom-button" type="button">Descargar</button>
            </a>
          </td>
          <td class="p-2 border-l border-r border-black">
            <!-- Enlace para descargar el archivo XML de la factura -->
            <a class="flex justify-center" href="{{ route('archivosDown', $factura->xml) }}">
              <button class="custom-button" type="button">Descargar</button>
            </a>
          </td>

          <td class="p-2 border-l border-r border-black">
            <!-- Enlace para eliminar la factura -->
            <a class="flex justify-center" href="{{ route('eliminarFactura', $factura->id) }}">
              <button class="custom-button" type="button">Eliminar</button>
            </a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>  
  
@endsection
