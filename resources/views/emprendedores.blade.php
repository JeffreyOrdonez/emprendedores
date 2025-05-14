<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/inicio">inicio</a> |
<a href="/calendario">calendario</a> |
<a href="/feria">feria</a> |
<a href="/emprendedores">Participa</a> |


<div class="container mt-4">
<h2> Agregar feria</h2>

<form action="/nuevaferia" method="POST">
    @csrf
    <label for="nombrecompleto">Nombre</label>
    <input type="text" name ="nombre" id="nombre" required>
    <br>
    <label for="servicio">Servicio</label>
    <select name="servicio" id="servicio" required>
        <option value="comida">Comida</option>
        <option value="uñas">Uñas</option>
        <option value="estilista">Estilista</option>
        <option value="mascotas">Mascotas</option>
        <option value="arte">Arte</option>
        <option value="tecnologia">Tecnologia</option>
    </select>
    <br>
    

    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" required>
    <br>

    <label for="descripcion">Descripccion</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>

    <br>
    <button type="submit">Agregar</button>

</form>
</div>

</body>
</html>