<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">

<a href="/inicio">inicio</a> |
<a href="/calendario">calendario</a> |
<a href="/feria">feria</a> |
<a href="/emprendedores">Participa</a> |

<h2> Agregar feria</h2>

<form action="/nuevaferia" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name ="nombreferia" id="nombreferia" required>
    <br>

    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha" required>
    <br>

    <label for="lugar">Lugar</label>
    <input type="text" name="lugar" id="lugar" required>
    <br>

    <label for="descripcion">Descripccion</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>

    <button type="submit">Agregar</button>

</form>
</div>
</body>
</html>
