@extends('layouts.app')

@section('Titulo')
    Inicia Sesión en MusicGram
@endsection()

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md: w-6/12 p-5">
           <img src="{{asset('img/login.jpg')}}" alt="Imagen Login" class="">
        </div>
        <div class="md: w-4/12 bg-white p-5 rounded-lg shadow-xl">
            @if (session('message'))
                <p class="bg-red-600 text-sm text-center rounded-lg p-3 m-3 text-white">
                    {{session('message')}}
                </p>
            @endif
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf <!--Método de seguridad para POST previniendo ataques CSFR-->
                <div class="mb-5">
                    <label for="email" class="mb-2 uppercase block text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Ingresa tu correo"
                        class="p-3 border rounded-lg w-full @error('email') border-red-600 @enderror"
                        value="{{old('email')}}"
                    />
                    @error('email')
                        <p class="bg-red-600 text-sm text-center rounded-lg p-3 m-3 text-white">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 uppercase block text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Ingresa tu Contraseña"
                        class="p-3 border rounded-lg w-full @error('password') border-red-600 @enderror"
                    />
                    @error('password')
                        <p class="bg-red-600 text-sm text-center rounded-lg p-3 m-3 text-white">{{$message}}</p>
                    @enderror
                </div>

                <input 
                    type="submit"
                    value="Iniciar Sesión"                
                    class="bg-amber-600 hover:bg-amber-700 transition-colors cursor-pointer rounded-lg uppercase font-bold text-white w-full p-2"
                />
            </form>
        </div>
    </div>
@endsection