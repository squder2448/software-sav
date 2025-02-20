<?php

require 'conexion.php';

// Consulta para sumar la cantidad total de registros de una columna
$sql = "SELECT SUM(existencia) AS total FROM productos";
$sql1 = "SELECT SUM(precio_venta) AS total1 FROM productos";
$sql2 = "SELECT SUM(precio_compra) AS total2 FROM productos";
$sql3 = "SELECT SUM(utilidad) AS total3 FROM productos";
$result = mysqli_query($conexion, $sql);
$result1 = mysqli_query($conexion, $sql1);
$result2 = mysqli_query($conexion, $sql2);
$result3 = mysqli_query($conexion, $sql3);

// Verificar si la consulta tuvo éxito
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $total = $row["total"];
} else {
    echo "No se encontraron resultados.";
}

if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $total1 = number_format($row["total1"],0, ".", ".");
} else {
    echo "No se encontraron resultados.";
}

if (mysqli_num_rows($result2) > 0) {
    $row = mysqli_fetch_assoc($result2);
    $total2 = number_format($row["total2"],0, ".", ".");
} else {
    echo "No se encontraron resultados.";
}

if (mysqli_num_rows($result3) > 0) {
    $row = mysqli_fetch_assoc($result3);
    $total3 = number_format($row["total3"],0, ".", ".");
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($conexion);



?>