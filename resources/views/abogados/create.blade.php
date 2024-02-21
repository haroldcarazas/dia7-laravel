@extends('layouts.main-layout')

@section('content')
    <div class="flex flex-col justify-center items-center pt-10">
        <h2 class="text-2xl mb-10">Crear abogado</h2>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('abogados-store') }}" method="POST"
            class="bg-blue-400 py-6 px-10 text-white rounded-md flex flex-col gap-8">
            @csrf
            <div class="flex flex-col gap-5">
                <label>DNI:</label>
                <input class="text-black border-0 active:outline-none focus:outline-none py-1 px-2" type="text"
                    name="dni">
                <span class="text-red-600 font-semibold text-md">{{ $errors->first('dni') }}</span>
            </div>

            <div class="flex flex-col gap-5">
                <label>Nombre:</label>
                <input class="text-black border-0 active:outline-none focus:outline-none py-1 px-2" type="text"
                    name="nombre">
                <span class="text-red-600 font-semibold text-md">{{ $errors->first('nombre') }}</span>
            </div>

            <div class="flex flex-col gap-5">
                <label>Dirección:</label>
                <input class="text-black border-0 active:outline-none focus:outline-none py-1 px-2" type="text"
                    name="direccion">
                <span class="text-red-600 font-semibold text-md">{{ $errors->first('direccion') }}</span>
            </div>

            <button type="submit" class="bg-green-300 text-black py-1 px-2 rounded-md">Guardar</button>
        </form>

        @if (session('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>
@endsection
