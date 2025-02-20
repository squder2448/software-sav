<?php

require 'conexion.php';

// Realizar la búsqueda en la base de datos
if (isset($_POST['search'])) {
  $searchQuery = $_POST['search'];
  $sql = "SELECT * FROM productos WHERE codigo LIKE '%$searchQuery%'";
  $result = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '<li class="search-result">' . $row['codigo'] ." ". $row['marca'] ." ".$row['nombre_producto'] . '</li>';

    }
  } else {
    echo '<li>No se encontraron resultados</li>';
  }
}

mysqli_close($conexion);
?>
