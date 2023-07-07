@extends('layouts.appDashboard')

@section('titulo')
    Agregar factura
@endsection

@section('titulo2')
    <!-- Título secundario de la vista -->
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-black">AGREGAR FACTURA</h2>
    </div>
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!-- Formulario para registrar una factura -->
            <form method="POST" action="" enctype="multipart/form-data" novalidate>
                <!-- Directiva de seguridad -->
                @csrf

                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{session('mensaje')}}
                    </p>
                @endif

                <div class="mb-4">
                    <label for="emisora"  class="mb-2 block uppercase font-bold">Empresa Emisora:</label>
                    <!-- Select para seleccionar una empresa emisora -->
                    <select id="emisora" name="emisora_id" required class="w-full p-2 pl-8 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('emisora') border-red-500 @enderror">
                        <option value="">Selecciona una empresa emisora</option>
                        @foreach ($emisoras as $emisora)
                            <option value="{{ $emisora->id }}">{{ $emisora->razon }}</option>
                        @endforeach
                    </select>
                    @error('emisora')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receptora" class="mb-2 block uppercase font-bold">Empresa Receptora:</label>
                    <!-- Select para seleccionar una empresa receptora -->
                    <select id="receptora" name="receptora_id" required  class="w-full p-2 pl-8 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('receptora') border-red-500 @enderror">
                        <option value="">Selecciona una empresa receptora</option>
                        @foreach($receptoras as $receptora)
                            <option value="{{ $receptora->id }}">{{ $receptora->nombre }}</option>
                        @endforeach
                    </select>
                    @error('receptora')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="folio">
                        Folio de Factura
                    </label>
                    <!-- Campo para ingresar el folio de la factura -->
                    <input id="folio" name="folio" type="text" placeholder="Folio de Factura" class="border p-3 w-full rounded-lg @error('folio') border-red-500 @enderror" value="{{old('folio')}}">
                    @error('folio')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <!-- Agregar campo oculto para guardar el valor de la imagen -->
                <div class="mt-4">
                    <input name="pdf" type="hidden" value="{{ old('pdf') }}">
                    @error('pdf')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-4">
                    <input name="xml" type="hidden" value="{{ old('xml') }}">
                    @error('xml')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Botón para enviar los datos -->
                <input type="submit" value="Guardar Datos" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>

        <!-- Contenedor del Dropzone PDF -->
        <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl mt-4">
            <div class="md:w-full px-2 py-2">
                <form method="POST" action="{{route('archivospdf')}}" id="dropzone" class="dropzone border-dashed border-2 w-full h-48 rounded flex flex-col justify-center items-center" novalidate>
                    @csrf
            </form>
            </div>
            <div class="md:w-full px-2 py-2">
                <form method="POST" action="{{route('archivospdf')}}" id="dropzone2" class="dropzone border-dashed border-2 w-full h-48 rounded flex flex-col justify-center items-center" novalidate>
                    @csrf
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

@section('js')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endsection
