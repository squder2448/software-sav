<?php
// Archivo de conexión a la base de datos
require 'conexion.php';

// Obtener datos del formulario
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$nombre_producto = $_POST['nombre_producto'];
$descripccion = $_POST['descripccion'];
$existencia = $_POST['existencia'];
$stock = $_POST['stock'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$utilidad = $precio_venta - $precio_compra;

// Crear consulta SQL
$sql = "INSERT INTO productos (codigo, marca, nombre_producto, descripccion, existencia, stock, 
precio_compra, precio_venta, utilidad)
VALUES ('$codigo', '$marca', '$nombre_producto', '$descripccion', '$existencia', '$stock', 
'$precio_compra', '$precio_venta', '$utilidad')";

// Ejecutar consulta SQL
if (mysqli_query($conexion, $sql)) {
    echo "<script type='text/javascript'>alert('Información grabada exitosamente');</script>";
    echo "<script>location.href='../inventario.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
?>