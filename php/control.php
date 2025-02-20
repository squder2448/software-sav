<?php
session_start();
if (empty($_POST["enviar"])) {
     if (!empty($_POST["usuario"]) and !empty($_POST["contraseña"])) {
          $usuario=$_POST["usuario"];
          $contraseña=$_POST["contraseña"];
          $sql=$conexion->query(" SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'");
          if ($datos=$sql->fetch_object()) {
               $_SESSION["id"]=$datos->id;
               $_SESSION["nombres"]=$datos->nombres;
               $_SESSION["apellidos"]=$datos->apellidos;
               header ("location: dashboard/dash.php");
          } else {
               echo "<div class='alert alert-danger'>Acesso Denegado, Usuario o Contraseña incorrecta.</div>";
          }
          
     } else {
          echo "";
     }
     
}


?>