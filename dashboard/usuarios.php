<?php require ('../dashboard/layout/layout.php') ?>


<section class="container">
  <main>
        <div class="container py-4 text-center">
            <h2>Usuarios</h2>
              <br>
            <div class="row py-4">
                <div class="col table-responsive">
                    <table>
                    <tbody id="content1">
                          <?php
                          
                          require 'php/conexion.php';

        $sql = "SELECT ID, usuario, nombres, apellidos, Cedula, Rol FROM usuarios;";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
         echo "<table class='table table-sm table-bordered' >
            <tr>
            <th>ID</th>
            <th>usuario</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>cedula</th>
            <th>rol</th>
            <th>Modificar/Eliminar</th>
            <thead></thead></tr>
            ";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID"]. "</td>";
            echo "<td>" . $row["usuario"]. "</td>";
            echo "<td>" . $row["nombres"]. "</td>";
            echo "<td>" . $row["apellidos"]. "</td>";
            echo "<td>" . $row["Cedula"]. "</td>";
            echo "<td>" . $row["Rol"]. "</td>";
            echo "<td>
            <a class='text-success' href='#'><i class='fa-solid fa-user-shield'></i></a> -  
            <a class='text-danger' href='#'><i class='fa-solid fa-trash'> </i></a>
            </td>";
            echo "</tr>";
         }
            echo "</table>";
        } else {
         echo "0 results";
        }

        mysqli_close($conexion);
                          
?>

                        <!-- El id del cuerpo de la tabla. -->     
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label id="lbl-total1"></label>
                </div>
                <div class="col-6" id="nav-paginacion1"></div>
            </div>
        </div>
    </main>
    </section>



<?php require ('../dashboard/layout/footer.php') ?>