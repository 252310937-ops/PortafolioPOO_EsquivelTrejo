<?php

// Recuperar los datos enviados desde el formulario
$productos = $_POST['producto'];
$precios = $_POST['precio'];

// Calcular total de precios
$total = array_sum($precios);

// Calcular promedio
$promedio = $total / count($precios);

// Obtener precio más alto y más bajo
$precioMax = max($precios);
$precioMin = min($precios);

// Obtener posición del precio máximo y mínimo
$indiceMax = array_search($precioMax, $precios);
$indiceMin = array_search($precioMin, $precios);

// Obtener nombres de productos
$productoMax = $productos[$indiceMax];
$productoMin = $productos[$indiceMin];

// Enviar datos a resultados.php
include("resultados.php");

?>