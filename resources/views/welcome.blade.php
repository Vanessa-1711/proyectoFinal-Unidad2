<!--Crear una directiva para incluir la navegacio -->
@extends('layouts.app')

<!--Directiva para crear el contenido que se envia al contenedor (@ield) -->

<!--crear el contenido que se envia al contenedor de contenedido en el app -->
@section('contenido')
    
    <div class="bg-purple-100" style="background-color:#9C5996; height: 500px; width: 100%; back">
         Contenedor principal 
        <div class="container mx-auto h-full flex flex-col items-center justify-center">
            <!-- Título principal -->
            <h1 style="font-family: 'Averia Serif Libre', cursive !important;text-align: center !important;color: #000000 !important;font-size: 75px !important;margin: 0 !important;" class="text-white text-7xl font-bold mb-4" style="">WELCOME TO <br> DEVSTAGRAM</h1>
            
        </div>
    </div>
    <br>
    


@endsection