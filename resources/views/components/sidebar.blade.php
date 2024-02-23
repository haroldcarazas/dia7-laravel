<aside class="h-screen w-[15%] bg-blue-300 flex flex-col justify-between items-center py-5 text-lg">
    <div class="w-[150px] h-[150px]">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="w-[100%] h-[100%] object-cover">
    </div>

    <ul class="flex flex-col gap-6 text-xl w-[100%]">
        <li class="p-3 hover:bg-blue-600">
            <a href="#">Home</a>
        </li>
        <li class="p-3 hover:bg-blue-600">
            <a href="{{ route('abogados-index') }}">Detalle</a>
        </li>
        <li class="p-3 hover:bg-blue-600">
            <a href="{{ route('abogados-create') }}">Crear</a>
        </li>
    </ul>

    <div>
        <button class="bg-red-400 p-2 rounded-md">Cerrar sesión</button>
    </div>
</aside>
