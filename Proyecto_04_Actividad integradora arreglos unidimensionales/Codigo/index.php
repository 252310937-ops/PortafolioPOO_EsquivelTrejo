<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
</head>
<body>

    <h2>Registro de Productos</h2>

    <form action="procesar.php" method="POST">

        <!-- Producto 1 -->
        Nombre:
        <input type="text" name="producto[]" required>
        Precio:
        <input type="number" name="precio[]" step="0.01" min="0" required>
        <br><br>

        <!-- Producto 2 -->
        Nombre:
        <input type="text" name="producto[]" required>
        Precio:
        <input type="number" name="precio[]" step="0.01" min="0" required>
        <br><br>

        <!-- Producto 3 -->
        Nombre:
        <input type="text" name="producto[]" required>
        Precio:
        <input type="number" name="precio[]" step="0.01" min="0" required>
        <br><br>

        <!-- Producto 4 -->
        Nombre:
        <input type="text" name="producto[]" required>
        Precio:
        <input type="number" name="precio[]" step="0.01" min="0" required>
        <br><br>

        <!-- Producto 5 -->
        Nombre:
        <input type="text" name="producto[]" required>
        Precio:
        <input type="number" name="precio[]" step="0.01" min="0" required>
        <br><br>

        <input type="submit" value="Procesar Inventario">

    </form>

</body>
</html>