@extends('layouts.appLogin')

@section('contenido')

<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0" style="background-color: #EED5D8;">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <div class="flex items-center justify-center">
            <img class="w-24 h-24 mr-2" src="{{asset('img/usuario.png')}}" alt="logo">
        </div>

        <h1 class=" text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black" >
            Iniciar sesion
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{route('login')}}" novalidate>
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('mensaje')}}
                </p>
            @endif
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('email') border-red-500 @enderror" value="{{old('email')}}"   placeholder="name@company.com" required="">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:text-black  dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 @enderror" value="{{old('email')}}"   placeholder="name@company.com"  required="">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <input style="width: 100%; color: #000; background-color: #D9ABB6; border-radius: 0.375rem; font-size: 0.875rem; font-weight: 500; padding: 0.625rem 1.25rem; text-align: center; transition: background-color 0.3s ease;" type="submit" value="Sign in" onmouseover="this.style.backgroundColor='#B28594';" onmouseout="this.style.backgroundColor='#D9ABB6';">
        </form>
    </div>
</div>
@endsection