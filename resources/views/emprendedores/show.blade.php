<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Emprendedor</title>
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

    <div class="flex justify-center items-center min-h-[80vh]">
        <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-10 max-w-xl w-full">
            <h1 class="text-3xl font-bold mb-8 text-center">Detalle de Emprendedor</h1>
            <div class="mb-4">
                <strong>Nombre:</strong>
                <span>{{ $emprendedores->nombre }}</span>
            </div>
            <div class="mb-4">
                <strong>Teléfono:</strong>
                <span>{{ $emprendedores->telefono }}</span>
            </div>
            <div class="mb-4">
                <strong>Servicio:</strong>
                <span>{{ $emprendedores->servicio }}</span>
            </div>
            
            <div class="flex justify-between mt-8">
                <a href="{{ route('emprendedores.index') }}" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Volver</a>
                <a href="{{ route('emprendedores.edit', $emprendedores->id) }}" class="px-4 py-2 rounded bg-gradient-to-r from-[#ff5858] to-[#f09819] text-white font-bold hover:scale-105 transition">Editar</a>
            </div>
        </div>
    </div>
</body>
</html>