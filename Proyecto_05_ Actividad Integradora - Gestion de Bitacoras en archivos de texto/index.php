<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bitácora de Actividades</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form{
            width: 400px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        input, textarea{
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }

        button{
            padding: 10px;
        }

        .exito{
            color: green;
            font-weight: bold;
        }

        .error{
            color: red;
            font-weight: bold;
        }

        pre{
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1>Gestión de Bitácoras</h1>

<form method="POST">

    <label>Descripción de la actividad:</label>
    <textarea name="actividad"></textarea>

    <label>Responsable:</label>
    <input type="text" name="responsable">

    <label>Fecha:</label>
    <input type="date" name="fecha">

    <button type="submit">Guardar Actividad</button>

</form>

<?php

$archivo = "bitacora.txt";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $actividad = trim($_POST["actividad"]);
    $responsable = trim($_POST["responsable"]);
    $fecha = trim($_POST["fecha"]);

    if(empty($actividad) || empty($responsable) || empty($fecha)){

        echo "<p class='error'>Error: Todos los campos son obligatorios.</p>";

    }else{

        // Evita etiquetas HTML o scripts
        $actividad = htmlspecialchars($actividad);
        $responsable = htmlspecialchars($responsable);

        $registro =
        "Fecha: $fecha\n" .
        "Actividad: $actividad\n" .
        "Responsable: $responsable\n" .
        "-------------------------------\n";

        if(file_put_contents($archivo, $registro, FILE_APPEND)){

            echo "<p class='exito'>Actividad guardada correctamente.</p>";

        }else{

            echo "<p class='error'>Error al guardar la actividad.</p>";

        }
    }
}

echo "<h2>Bitácora Registrada</h2>";

if(file_exists($archivo)){

    $contenido = file_get_contents($archivo);

    echo "<pre>$contenido</pre>";

}else{

    echo "<p>No hay actividades registradas.</p>";

}
?>

</body>
</html>