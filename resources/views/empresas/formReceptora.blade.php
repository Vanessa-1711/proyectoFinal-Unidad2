@extends('layouts.appDashboard')

@section('titulo')
    Agregar empresa receptora
@endsection

@section('titulo2')
    <!-- Título secundario de la vista -->
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-black">AGREGAR EMPRESA RECEPTORA</h2>
    </div>
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <!-- Insertar imagen utilizando la función "asset" para acceder a la carpeta "public" -->
        <img src="{{asset('img/1.png')}}" alt="Imagen de registro de usuarios">
    </div>
    <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <!-- Formulario para agregar una empresa receptora -->
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
                    Nombre
                </label>
                <!-- Campo para ingresar el nombre de la empresa receptora -->
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="direccion">
                    Dirección
                </label>
                <!-- Campo para ingresar la dirección de la empresa receptora -->
                <input id="direccion" name="direccion" type="text" placeholder="Dirección" class="border p-3 w-full rounded-lg @error('direccion') border-red-500 @enderror" value="{{old('direccion')}}">
                @error('direccion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="rfc">
                    RFC 
                </label>
                <!-- Campo para ingresar el RFC de la empresa receptora -->
                <input id="rfc" name="rfc" type="text" placeholder="RFC de contacto" class="border p-3 w-full rounded-lg @error('rfc') border-red-500 @enderror" value="{{old('rfc')}}">
                @error('rfc')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="contacto">
                    Contacto 
                </label>
                <!-- Campo para ingresar el contacto de la empresa receptora -->
                <input id="contacto" name="contacto" type="text" placeholder="Contacto" class="border p-3 w-full rounded-lg @error('contacto') border-red-500 @enderror" value="{{old('contacto')}}">
                @error('contacto')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <!-- Campo de stock -->
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">
                    Email de contacto
                </label>
                <!-- Campo para ingresar el email de contacto de la empresa receptora -->
                <input id="email" name="email" type="email" placeholder="Email de contacto" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <!-- Botón para enviar los datos -->
            <input type="submit" value="Guardar Datos" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>

@endsection
