<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferias</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-200 mt-[60px]">
    <nav class="bg-gradient-to-r from-[#ff5858] to-[#f09819] fixed left-0 top-0 w-screen h-[40px] flex lg:flex-row flex-col justify-between items-center px-10">
        <div>
            <a href="/inicio" class="mr-10">inicio</a>
            <a href="/calendario" class="mr-10">calendario</a>
            <a href="/ferias" class="mr-10">ferias</a>
            <a href="/emprendedores" class="mr-10">Participa</a>
        </div>
    </nav>

    <div class="container mx-auto mt-16">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Listado de Ferias</h1>
            <a href="{{ route('ferias.create') }}"
               class="px-6 py-2 rounded-lg font-bold text-white bg-gradient-to-r from-[#ff5858] to-[#f09819] shadow-md hover:scale-105 hover:shadow-lg transition duration-200">
                Agregar feria
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-200 text-red-800 px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-6">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Fecha</th>
                        <th class="px-4 py-2">Lugar</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ferias as $feria)
                        <tr>
                            <td class="border px-4 py-2">{{ $feria->nombre }}</td>
                            <td class="border px-4 py-2">{{ $feria->fecha }}</td>
                            <td class="border px-4 py-2">{{ $feria->lugar }}</td>
                            <td class="border px-4 py-2">{{ $feria->descripcion }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('ferias.show', $feria->id) }}" class="text-blue-600 hover:underline">Ver</a>
                                <a href="{{ route('ferias.edit', $feria->id) }}" class="text-yellow-600 hover:underline ml-2">Editar</a>
                                <!-- Aquí puedes agregar un formulario para eliminar si lo deseas -->
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No hay ferias registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{-- Solo muestra la paginación si $ferias es un LengthAwarePaginator --}}
                @if(method_exists($ferias, 'links'))
                    {{ $ferias->links() }}
                @endif
            </div>
        </div>
    </div>
</body>
</html>