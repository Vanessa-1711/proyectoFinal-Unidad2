@extends('layouts.appDashboard')

@section('titulo')
    Agregar empresa emisora
@endsection

@section('titulo2')
    <div class="bg-gradient-to-r from-purple-100 to-pink-300 p-4 text-center">
        <h2 class="text-3xl font-extrabold text-blak">AGREGAR EMPRESA EMISORA</h2>
    </div>
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <!--Insertar imagen utilizando "assert "(acceder a carpea public) -->
        <img src="{{asset('img/2.png')}}" alt="Imagen login de usuarios">
    </div>
    <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <!--Formulario para registrarse -->
        <form method="POST" action="" novalidate>
            <!--Directiva de seguridad -->
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('mensaje')}}
                </p>
            @endif
            
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="razon">
                    Razon Social
                </label>
                <input id="razon" name="razon" type="text" placeholder="Razon Social" class="border p-3 w-full rounded-lg @error('razon') border-red-500 @enderror" value="{{old('razon')}}">
                @error('razon')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            

            <!--Campo de stock -->
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="correo">
                    Correo de contacto
                </label>
                <input id="correo" name="correo" type="email" placeholder="Correo de contacto" class="border p-3 w-full rounded-lg @error('correo') border-red-500 @enderror" value="{{old('correo')}}">
                @error('correo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="rfc">
                    RFC emisor
                </label>
                <input id="rfc" name="rfc" type="text" placeholder="RFC de contacto" class="border p-3 w-full rounded-lg @error('rfc') border-red-500 @enderror" value="{{old('rfc')}}">
                @error('rfc')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>


            <!--boton para mandar los datos -->
            <input type="submit" value="Guardar Datos" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>

@endsection