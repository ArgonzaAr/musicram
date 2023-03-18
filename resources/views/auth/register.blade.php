@extends('layouts.app')

@section('Titulo')
    Registrate en MusicGram!
@endsection()

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md: w-6/12 p-5">
           <img src="{{asset('img/register.jpg')}}" alt="Imagen register" class="">
        </div>
        <div class="md: w-4/12 bg-white p-5 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf <!--Método de seguridad para POST previniendo ataques CSFR-->
                <div class="mb-5">
                    <label for="name" class="mb-2 uppercase block text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Ingresa tu Nombre"
                        class="p-3 border rounded-lg w-full @error('name') border-red-600 @enderror"
                        value="{{old('name')}}"
                    />
                    @error('name')
                        <p class="bg-red-600 text-sm text-center rounded-lg p-3 m-3 text-white">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 uppercase block text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Ingresa tu Username"
                        class="p-3 border rounded-lg w-full @error('username') border-red-600 @enderror"
                        value="{{old('username')}}"
                    />
                    @error('username')
                        <p class="bg-red-600 text-sm text-center rounded-lg p-3 m-3 text-white">{{$message}}</p>
                    @enderror
                </div>

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

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 uppercase block text-gray-500 font-bold">
                        Confirmar Password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Escribe nuevamente tu contraseña"
                        class="p-3 border rounded-lg w-full"
                    />
                </div>

                <input 
                    type="submit"
                    value="Crear Cuenta"                
                    class="bg-amber-600 hover:bg-amber-700 transition-colors cursor-pointer rounded-lg uppercase font-bold text-white w-full p-2"
                />
            </form>
        </div>
    </div>
@endsection