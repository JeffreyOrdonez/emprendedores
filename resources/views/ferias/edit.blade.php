<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Feria</title>
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

    <div class="flex justify-center items-center min-h-[80vh]">
        <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-10 max-w-xl w-full">
            <h1 class="text-3xl font-bold mb-8 text-center">Editar Feria</h1>
            @if(session('error'))
                <div class="bg-red-200 text-red-800 px-4 py-2 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('ferias.update', $feria->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <label for="nombre" class="block mb-2">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $feria->nombre) }}" class="w-full px-4 py-2 rounded border" required>
                    @error('nombre')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="fecha" class="block mb-2">Fecha</label>
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $feria->fecha) }}" class="w-full px-4 py-2 rounded border" required>
                    @error('fecha')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lugar" class="block mb-2">Lugar</label>
                    <input type="text" name="lugar" id="lugar" value="{{ old('lugar', $feria->lugar) }}" class="w-full px-4 py-2 rounded border" required>
                    @error('lugar')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="descripcion" class="block mb-2">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="w-full px-4 py-2 rounded border" required>{{ old('descripcion', $feria->descripcion) }}</textarea>
                    @error('descripcion')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('ferias.index') }}" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancelar</a>
                    <button type="submit" class="px-6 py-2 rounded bg-gradient-to-r from-[#ff5858] to-[#f09819] text-white font-bold hover:scale-105 transition">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>