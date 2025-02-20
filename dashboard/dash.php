<?php require('./layout/layout.php')?>



    <div class="container justify-content-center" id="content">
        <section>
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-12 text-center">
                        <h1>Bienvenid@
                        <?php echo $_SESSION['nombres'] ?>
                        </h1>
                        <p>Ingresa alguno de nuestros accesos directos.</p>
                    </div>
                </div>
            </div>
        </section>

        &#160


    <section class="container">
  <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
  <div class="col">
    <div class="card w-75 shadow">
      <div class="card-body">
      <img width="50px" src="https://img.icons8.com/color/48/null/check--v1.png"/>
        <h5 class="card-title">Factura de venta</h5>
        <p class="card-text">Genera reporte, cofingura el entorno, modifica los usuarios</p>
        <button class="btn btn-primary" type="button">
          <a class="text-decoration-none text-light" href="ventas.php">ingresar</a>
        </button></div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75 shadow">
      <div class="card-body">
      <img width="50px" src="https://img.icons8.com/color/48/null/move-by-trolley.png"/>
        <h5 class="card-title">Inventario</h5>
        <p class="card-text">Genera reporte, cofingura el entorno, modifica los usuarios</p>
        <button class="btn btn-primary" type="button">
        <a class="text-decoration-none text-light" href="inventario.php">ingresar</a>
        </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75 shadow">
      <div class="card-body">
      <img width="50px" src="https://img.icons8.com/color/48/null/bullish.png"/>
        <h5 class="card-title">Finanzas</h5>
        <p class="card-text">compare ventas, vea los productos mas vendidos y mucho mas</p>
        <button class="btn btn-primary" type="button">
        <a class="text-decoration-none text-light" href="finanzas.php">ingresar</a>
        </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75 shadow">
      <div class="card-body">
      <img width="50px" src="https://img.icons8.com/color/48/null/administrator-male--v1.png"/>
        <h5 class="card-title">Administracion</h5>
        <p class="card-text">Genera reporte, cofingura el entorno, modifica los usuarios</p>
        <button class="btn btn-primary" type="button">
        <a class="text-decoration-none text-light" href="admin.php">ingresar</a>
        </button>
      </div>
    </div>
  </div>
</div>
</section>


    <?php require('layout/footer.php') ?>
    </div>

