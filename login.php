<?php require ('layout/header.php') ?>

  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="border border-3 border-primary"></div>
          <div class="card bg-white shadow-lg">
            <div class="card-body p-3">
              <form class="mb-3 mt-md-4" action="" method="POST">
                <h2 class="fw-bold mb-2 text-uppercase text-center">Bienvenido</h2>
                <?php
                  include "php/conexion.php";
                  include "php/control.php";
                  ?>
                <div class="mb-3">
                  <label for="email" class="form-label ">Ingrese Usuario</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Contraseñas</label>
                  <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="*******">
                </div>
                <p class="small"><a class="text-primary" href="forget-password.html">Se te olvido la contraseña?</a></p>
                <div class="d-grid">
                  <button class="btn btn-outline-primary" name="enviar" id="enviar" type="submit">Ingresar</button>
                </div>
              </form>
              <div>
                <p class="mb-0  text-center">aun no tienes cuenta? <a href="precios.html"
                    class="text-primary fw-bold">afiliate</a></p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>

</body>
</html>