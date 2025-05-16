<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!--Diseños-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
    <body class="bg-orange-200 mt-[60px]">
        <nav class="bg-gradient-to-r from-[#ff5858] to-[#f09819] fixed left-0 top-0 w-screen h-[40px] flex lg:flex-row flex-col justify-between items-center px-10">
            <div>
                <a href="/inicio" class="mr-10">inicio</a>
                <a href="/calendario" class="mr-10">calendario</a>
                <a href="/feria" class="mr-10">feria</a>
                <a href="/emprendedores" class="mr-10">Participa</a>
            </div>
        </nav>

    <div class="text-3xl font-bold mb-4 ml-8">
        <h1>Agregar feria</h1>
    </div>

    <div class="flex justify-center items-center min-h-[80vh]">
        <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-10 max-w-xl w-full">
            <h1 class="text-3xl font-bold mb-8 text-center">Ingrese una nueva feria</h1>
            <form action="/nuevaferia" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="nombreferia" class="block mb-2">Nombre</label>
                    <input type="text" name="nombreferia" id="nombreferia" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 transition duration-200 outline-none" />
                </div>
                <div>
                    <label for="fecha" class="block mb-2">Fecha</label>
                    <input type="date" name="fecha" id="fecha" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 transition duration-200 outline-none" />
                </div>
                <div>
                    <label for="lugar" class="block mb-2">Lugar</label>
                    <input type="text" name="lugar" id="lugar" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 transition duration-200 outline-none" />
                </div>
                <div>
                    <label for="descripcion" class="block mb-2">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="4" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 transition duration-200 outline-none resize-none"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="px-8 py-2 rounded-lg font-bold text-white bg-gradient-to-r from-[#ff5858] to-[#f09819] shadow-md hover:scale-105 hover:shadow-lg transition duration-200">
                        Agregar
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
