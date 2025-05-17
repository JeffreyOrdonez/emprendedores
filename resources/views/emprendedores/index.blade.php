<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprendedores</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-200 mt-[60px]">
    <nav class="bg-gradient-to-r from-[#ff5858] to-[#f09819] fixed left-0 top-0 w-screen h-[40px] flex lg:flex-row flex-col justify-between items-center px-10">
        <div>
            <a href="/inicio" class="mr-10">inicio</a>
            <a href="/ferias" class="mr-10">ferias</a>
            <a href="/emprendedores" class="mr-10">Participa</a>
        </div>
    </nav>

    <div class="container mx-auto mt-16">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Listado de Emprendedores</h1>
            <a href="{{ route('emprendedores.create') }}"
               class="px-6 py-2 rounded-lg font-bold text-white bg-gradient-to-r from-[#ff5858] to-[#f09819] shadow-md hover:scale-105 hover:shadow-lg transition duration-200">
                Agregar emprendedor
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

        @if($emprendedores->count())
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded shadow">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Teléfono</th>
                            <th class="px-4 py-2">Servicio</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emprendedores as $emprendedor)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $emprendedor->nombre }}</td>
                                <td class="px-4 py-2">{{ $emprendedor->telefono }}</td>
                                <td class="px-4 py-2">{{ $emprendedor->servicio }}</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <a href="{{ route('emprendedores.show', $emprendedor->id) }}"
                                       class="px-2 py-1 rounded bg-blue-500 text-white text-xs font-semibold hover:bg-blue-600 transition"
                                       title="Ver">
                                        Ver
                                    </a>
                                    <a href="{{ route('emprendedores.edit', $emprendedor->id) }}"
                                       class="px-2 py-1 rounded bg-yellow-500 text-white text-xs font-semibold hover:bg-yellow-600 transition"
                                       title="Editar">
                                        Editar
                                    </a>
                                    <form action="{{ route('emprendedores.destroy', $emprendedor->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este emprendedor?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-2 py-1 rounded bg-red-500 text-white text-xs font-semibold hover:bg-red-600 transition"
                                            title="Eliminar">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $emprendedores->links() }}
            </div>
        @else
            <p class="text-center text-gray-600 mt-8">No hay emprendedores registrados.</p>
        @endif
    </div>
</body>
</html>