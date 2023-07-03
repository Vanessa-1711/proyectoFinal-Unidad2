@extends('layouts.appDashboard')

@section('titulo')
    empEmisora
@endsection

@section('titulo2')
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-blak">EMPRESAS EMISORAS</h2>
    </div>
@endsection

@section('contenido')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold"></h2>
    <button type="button" class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 text-white hover:text-white rounded-md px-3 py-2" onclick="window.location.href = '{{route('formEmisoras')}}'">
      <i class="fas fa-plus"></i>
      <span>Agregar Empresa</span>
    </button>
  </div>
<div class="overflow-x-auto">
    <table id="example" class="table table-striped table-bordered w-11/12 mx-auto text-sm text-left text-black dark:text-black border border-black">
      <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-pink-300 dark:text-black">
        <tr>
          <th scope="col" class="p-2 border-l border-r border-black">
            Id
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Razón Social
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Correo de contacto
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            RFC emisor
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($empresas as $empresas)
        <tr class="bg-white dark:border-gray-700">
          <th scope="row" class="p-2 font-medium border-l border-r border-black">
            {{ $empresas->id }}
          </th>
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->razon }}
          </td>
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->correo }}
          </td>
          <td class="p-2 border-l border-r border-black">
            {{ $empresas->rfc }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
  


  
  
@endsection