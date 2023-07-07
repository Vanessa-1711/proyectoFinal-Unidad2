@extends('layouts.appDashboard')

@section('titulo')
    empReceptoras
@endsection

@section('titulo2')
    <!-- Título secundario de la vista -->
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-black">EMPRESAS RECEPTORAS</h2>
    </div>
@endsection

@section('contenido')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold"></h2>
    <!-- Botón para agregar una nueva empresa -->
    <button type="button" class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 text-white hover:text-white rounded-md px-3 py-2" onclick="window.location.href = '{{route('formReceptoras')}}'">
      <i class="fas fa-plus"></i>
      <span>Agregar Empresa</span>
    </button>
  </div>

   <!-- Tabla de empresas receptoras -->
<div class="overflow-x-auto">
    <table id="example"  class="table table-striped table-bordered w-11/12 mx-auto text-sm text-left text-black dark:text-black border border-black">
      <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-pink-300 dark:text-black">
        <tr>
          <th scope="col" class="p-2 border-l border-r border-black">
            Id
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Nombre
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Dirección
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            RFC 
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Contacto 
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Correo 
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($empresas as $empresas)
        <tr class="bg-white dark:border-gray-700">
          <!-- Celda para mostrar el ID de la empresa -->
          <th scope="row" class="p-2 font-medium border-l border-r border-black">
            {{ $empresas->id }}
          </th>
          <!-- Celda para mostrar el nombre de la empresa -->
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->nombre }}
          </td>
          <!-- Celda para mostrar la dirección de la empresa -->
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->direccion }}
          </td>
          <!-- Celda para mostrar el RFC de la empresa -->
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->rfc }}
          </td>
          <!-- Celda para mostrar el contacto de la empresa -->
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->contacto }}
          </td>
          <!-- Celda para mostrar el correo de la empresa -->
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->email }}
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>  
  
@endsection
