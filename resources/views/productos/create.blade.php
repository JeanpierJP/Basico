<h1>Crear Producto</h1>

<form action="/productos" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre">

    <br><br>

    <label>Precio:</label>
    <input type="number" step="0.01" name="precio">

    <br><br>

    <button type="submit">Guardar</button>
</form>
