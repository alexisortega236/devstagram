@extends('layouts.app')

@section('title')
    Regístrate en Devstagram ¡Es gratis!
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img class="bg-gray-100 rounded-xl m-1 " src="{{ asset('img/mockup.avif') }}" alt="">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-xl shadow">
            <form action="{{ route('register-account') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" id="name" class="mb2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tú Nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500
                    @enderror "
                    value="{{old('name')}}"
                     />

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror


                </div>

                <div class="mb-5">
                    <label for="username" id="username" class="mb2 block uppercase text-gray-500 font-bold">
                        UserName
                    </label>
                    <input id="username" name="username" type="text" placeholder="Nombre de Usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500
                        @enderror" 
                        value="{{old('username')}}"
                        />

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="email" id="email" class="mb2 block uppercase text-gray-500 font-bold">
                        email
                    </label>
                    <input id="email" name="email" type="text" placeholder="Tú email de regsitro"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500
                        @enderror"
                        value="{{old('email')}}"
                        />

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="password" id="password" class="mb2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500
                        @enderror" 
                        value="{{old('password')}}"/>

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="password_confirmation" id="name" class="mb2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Repite tú Password"
                        class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500
                        @enderror" 
                        value="{{old('password_confirmation')}}"/>

                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky700 transition-colors cursor-pointer uppercase
                    font-bold w-full p-3 text-white rounded-lg mb-5">

            </form>
        </div>
    </div>
@endsection
