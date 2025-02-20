<?php

session_start();
if (empty($_SESSION["nombres"])) {
    header("location:../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e45e5b029a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Software SAV | Software-Administrativo-Ventas</title>
    <script src="js/jquery-latest.js"></script>
    <script src="js/arriba.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

</head>
<body>
    <div class="d-flex">
    <div id="myDIV" style="width:300px; height: 100; min-height:100vh;" class="bg-primary container">
      <div class="logo d-flex align-items-center m-3">
        <img class="img-fluid" src="../imagenes/logo.png" width="40px">&#160
        <h4 style="font-family:fredoka one; position:relative; top:5px;">
        <a class="text-decoration-none text-light" href="../index.php">Software SAV</a>
       </h4>
      </div>

      <hr class="bg-white m-1">

      <div  class="menu">
          <a class="d-block text-light p-3 text-decoration-none" href="dash.php"><i class="fa-solid fa-gauge-high mr-2 lead"></i> Dashboard</a>
          <a class="d-block text-light p-3 text-decoration-none" href="ventas.php"><i class="fa-solid fa-cash-register mr-2 lead"></i> Ventas</a>
          <a class="d-block text-light p-3 text-decoration-none" href="inventario.php"><i class="fa-solid fa-table-list mr-2 lead"></i> Inventario</a>
          <a class="d-block text-light p-3 text-decoration-none" href="finanzas.php"><i class="fa-solid fa-chart-simple mr-2 lead"></i> Finanzas</a>
          <a class="d-block text-light p-3 text-decoration-none" href="admin.php"><i class="fa-solid fa-user-tie mr-2 lead"></i> Administracion</a>
      </div>

      <hr class="bg-white m-1">
    </div>

    <div class="w-100">
    <nav class="navbar shadow p-3 mb-3 bg-body rounded">
    <div class="container">
      <div class="">
        
    <script>
          function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
    </script>


          <button type="button" class="btn" onclick="myFunction()">
              <i class="fa-solid fa-bars fa-2x text-primary"></i>
          </button>
      </div>
      <div>
      <ul class="navbar-nav">
  <li class="nav-item dropdown d-block">
    <a class="text-dark nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
    <i class="fa-regular fa-circle-user fa-lg"></i>
      <?php
      echo $_SESSION["nombres"]." ".$_SESSION["apellidos"];
      ?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#">Perfil</a></li>
      <li><a class="dropdown-item" href="./config.php">Configuracion</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../php/logout.php">Cerrar sesion</a></li>
    </ul>
  </li>
</ul>
      </div>
    </div>
    </nav>
    