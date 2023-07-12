@extends('layouts.appDashboard')

@section('estilos')
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Scripts de DataTables -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


@endsection

@section('titulo')
    empEmisora
@endsection

@section('titulo2')
    <!-- Título secundario de la vista -->
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-black">EMPRESAS RECEPTORA</h2>
    </div>
@endsection

@section('contenido')
<!-- table 1 -->
<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <br>
            </div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold"></h2>
                <!-- Botón para agregar una nueva empresa -->
                <button type="button" class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 text-white hover:text-white rounded-md px-3 py-2" onclick="window.location.href = '{{route('formReceptoras')}}'">
                    <i class="fas fa-plus"></i>
                    <span>Agregar Empresa</span>
                </button>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <div class="mx-4">
                        <table id="myTable" class="table table-striped table-bordered w-11/12 mx-auto text-sm text-left text-black dark:text-black border border-black" style="background-color: #f070ee !important;">
                            <thead class="text-xs text-center text-gray-700 uppercase bg-fuchsia-300 dark:bg-pink-300 dark:text-black">
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
                                    <th scope="col" class="p-2 border-l border-r border-black">
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
                                    <!-- Celda para mostrar la razón social de la empresa -->
                                    <td class="p-2 border-l border-r border-black">
                                        {{ $empresas->nombre }}
                                    </td>
                                    <!-- Celda para mostrar el correo de contacto de la empresa -->
                                    <td class="p-2 border-l border-r border-black">
                                        {{ $empresas->direccion }}
                                    </td>
                                    <!-- Celda para mostrar el RFC emisor de la empresa -->
                                    <td class="p-2 border-l border-r border-black">
                                        {{ $empresas->rfc }}
                                    </td>
                                    <td class="p-2 border-l border-r border-black">
                                        {{ $empresas->contacto }}
                                    </td>
                                    <td class="p-2 border-l border-r border-black">
                                        {{ $empresas->email }}
                                    </td>
                                    <td class="p-2 border-l border-r border-black">
                                        <form action="{{ route('eliminarReceptora', $empresas->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center justify-center bg-red-500 rounded-full w-8 h-8 text-white hover:bg-red-600">
                                                <i class="fas fa-trash text-xl"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('js/appTablas.js') }}"></script>

@endsection
