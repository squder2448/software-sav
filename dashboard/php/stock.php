<?php
require 'conexion.php';

$sql = "SELECT *, existencia - stock AS diferencial FROM productos WHERE existencia < stock";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-sm table-bordered' >
    <tr>
    <th>codigo</th>
    <th>marca</th>
    <th>nombre producto</th>
    <th>Descriccion</th>
    <th>existencia</th>
    <th>stock</th>
    <th>diferencial</th>
    <thead></thead></tr>
    ";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["codigo"]. "</td>";
      echo "<td>" . $row["marca"]. "</td>";
      echo "<td>" . $row["nombre_producto"]. "</td>";
      echo "<td>" . $row["descripccion"]. "</td>";
      echo "<td>" . $row["existencia"]. "</td>";
      echo "<td>" . $row["stock"]. "</td>";
      echo "<td>" . $row["diferencial"]. "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

mysqli_close($conexion);
?>
