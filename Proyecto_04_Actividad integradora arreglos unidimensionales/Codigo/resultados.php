<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        table{
            border-collapse: collapse;
            width: 60%;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #e0e0e0;
        }
    </style>

</head>
<body>

<h2>Inventario de Productos</h2>

<table>
    <tr>
        <th>Producto</th>
        <th>Precio</th>
    </tr>

    <?php
    for($i = 0; $i < count($productos); $i++){
        echo "<tr>";
        echo "<td>".$productos[$i]."</td>";
        echo "<td>$".$precios[$i]."</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>

<h3>Resumen</h3>

<table>
    <tr>
        <th>Total de la Venta</th>
        <td>$<?php echo number_format($total,2); ?></td>
    </tr>

    <tr>
        <th>Promedio de Precios</th>
        <td>$<?php echo number_format($promedio,2); ?></td>
    </tr>

    <tr>
        <th>Producto Más Caro</th>
        <td><?php echo $productoMax." ($".$precioMax.")"; ?></td>
    </tr>

    <tr>
        <th>Producto Más Barato</th>
        <td><?php echo $productoMin." ($".$precioMin.")"; ?></td>
    </tr>
</table>

</body>
</html>