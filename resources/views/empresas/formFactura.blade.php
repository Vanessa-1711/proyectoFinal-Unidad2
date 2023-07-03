@extends('layouts.appDashboard')

@section('titulo')
    regFactura
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
@section('titulo2')

    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-blak">AGREGAR FACTURA</h2>
    </div>
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <!-- Formulario para registrarse -->
        <form method="POST" action="" novalidate>
            <!-- Directiva de seguridad -->
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('mensaje')}}
                </p>
            @endif

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">
                    Empresa emisora
                </label>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">
                    Direccion
                </label>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">
                    RFC receptor
                </label>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">
                    Folio de Factura
                </label>
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <!-- Botón para enviar los datos -->
            <input type="submit" value="Guardar Datos" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
        <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!-- Área de carga de archivos -->
            <form action="/target" class="dropzone" id="my-great-dropzone"></form>
        
            <style>
                .dropzone {
                    border: 2px dashed #888;
                    padding: 2rem;
                    text-align: center;
                }
        
                .dropzone .dz-message {
                    font-size: 1.2rem;
                }
            </style>
        
            <script>
                Dropzone.options.myGreatDropzone = {
                    paramName: "file", // Nombre del parámetro para el archivo
                    maxFilesize: 2, // Tamaño máximo del archivo en MB
                    accept: function(file, done) {
                        if (file.name == "justinbieber.jpg") {
                            done("Nah, you don't.");
                        } else {
                            done();
                        }
                    },
                };
            </script>
        </div>
        
    </div>
    
</div>

@endsection

@section('js')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endsection