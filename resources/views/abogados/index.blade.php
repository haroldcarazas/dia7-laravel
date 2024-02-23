@extends('layouts.main-layout')

@section('content')
    <div class="w-full m-10 flex flex-col justify-center">

        @if (session('success'))
            <div id="successMessage" class="bg-green-600 transition-all duration-500">
                <p class="text-white text-lg">{{ session('success') }}</p>
            </div>
        @endif

        <table class="bg-blue-400 rounded-md border-separate border-spacing-4 border">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abogados as $abogado)
                    <tr>
                        <td>{{ $abogado->dni }}</td>
                        <td>{{ $abogado->nombre }}</td>
                        <td>{{ $abogado->direccion }}</td>
                        <td class="flex justify-around w-[150px]">
                            <a href="#" class=" bg-blue-900 text-white p-2 rounded-md">Editar</a>

                            <form action="{{ route('abogados-delete') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="abogado_id" value="{{ $abogado->id }}">
                                <button type="submit" class="bg-red-900 text-white p-2 rounded-md">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const container = document.getElementById('successMessage')

        if (container) {
            setTimeout(() => {
                container.style.display = 'none';
            }, 1000);
        }
    </script>
@endsection
