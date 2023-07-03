@extends('layouts.appDashboard')

@section('titulo')
    regFactura
@endsection

@section('titulo2')

    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-blak">REGISTRAR FACTURA</h2>
    </div>
@endsection

@section('contenido')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold"></h2>
    <button type="button" class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 text-white hover:text-white rounded-md px-3 py-2" onclick="window.location.href = '{{route('formFactura')}}'">
      <i class="fas fa-plus"></i>
      <span>Agregar Factura</span>
    </button>
  </div>

   <!-- jQuery, Popper.js, Bootstrap JS   -->
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
            Dirección
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            RFC receptor
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Folio de factura
          </th>
          <th scope="col" class="p-2 border-l border-r border-black">
            Factura
          </th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>  
  
@endsection