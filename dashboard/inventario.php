<?php require ('../dashboard/layout/layout.php')?>

<div class="container">
    <h1 style="position:relative; top:10px;" >Seccion Inventario</h1>
    <section style="position:relative; top:30px;" >
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Productos</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Crear producto</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Stock</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false">Inventario</button>
  </li>
</ul>



<!------------------------AQUI EMPIEZA LA SECCION DE LISTADO DE PRODUCTOS------------------------->


<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <section class="container">
    <main>
        <div class="container py-4 text-center">
            <h2>Productos</h2>

            <div class="row g-4">

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">Mostrar: </label>
                </div>

                <div class="col-auto">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">registros </label>
                </div>

                <div class="col-4"></div>

                <div class="col-auto">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-auto">
                    <input type="text" name="campo" id="campo" class="form-control">
                </div>
            </div>

            <div class="row py-4">
                <div class="col table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>codigo</th>
                            <th>marca</th>
                            <th>nombre producto</th>
                            <th>descripccion</th>
                            <th>Existencia</th>
                            <th>Stock</th>
                            <th>precio compra</th>
                            <th>precio venta</th>
                            <th>utilidad</th>
                            <th></th>
                            <th></th>
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label id="lbl-total"></label>
                </div>

                <div class="col-6" id="nav-paginacion"></div>
            </div>
        </div>
    </main>
    <script>
      let paginaActual = 1
/* Llamando a la función getData() */
getData(paginaActual)

/* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
document.getElementById("campo").addEventListener("keyup", function() {
    getData(1)
}, false)
document.getElementById("num_registros").addEventListener("change", function() {
    getData(paginaActual)
}, false)


/* Peticion AJAX */
function getData(pagina) {
    let input = document.getElementById("campo").value
    let num_registros = document.getElementById("num_registros").value
    let content = document.getElementById("content")

    if (pagina != null) {
        paginaActual = pagina
    }

    let url = "php/load.php"
    let formaData = new FormData()
    formaData.append('campo', input)
    formaData.append('registros', num_registros)
    formaData.append('pagina', paginaActual)

    fetch(url, {
            method: "POST",
            body: formaData
        }).then(response => response.json())
        .then(data => {
            content.innerHTML = data.data
            document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                ' de ' + data.totalRegistros + ' registros'
            document.getElementById("nav-paginacion").innerHTML = data.paginacion
        }).catch(err => console.log(err))
}

    </script>
    </section>
  </div>


<!------------------------AQUI EMPIEZA LA SECCION DE CREAR PRODCUTOS--------------------->

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <section class="container">
    <br>
    <form action="php/grabar_productos.php" method="POST" class="row g-3">
        <h3 style="text-align:center">Crear Nuevo producto</h3>
  <div class="col-md-4">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="number" class="form-control" id="codigo" name="codigo" required>
  </div>
  <div class="col-md-4">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" name="marca" required>
  </div>
  <div class="col-md-4">
    <label for="nombre_producto" class="form-label">Nombre producto</label>
      <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
  </div>
  <div class="col-md-6">
    <label for="descripccion" class="form-label">Descripccion</label>
    <input type="text" class="form-control" id="descripccion" name="descripccion" required>
  </div>
  <div class="col-md-3">
    <label for="existencia" class="form-label">Existencia</label>
    <input type="number" class="form-control" id="existencia" name="existencia" required>
  </div>
  <div class="col-md-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" required>
  </div>
  <div class="col-md-3">
    <label for="precio_compra" class="form-label">Precio compra</label>
    <input type="number" class="form-control" id="precio_compra" name="precio_compra" required>
  </div>
  <div class="col-md-3">
    <label for="precio_venta" class="form-label">Precio venta</label>
    <input type="number" class="form-control" id="precio_venta" name="precio_venta" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Crear producto</button>
    <button class="btn btn-danger" type="button" onclick="resetForm()">Borrar</button>
  </div>

<script src="js/borrar.js"></script>

</form>
    </section>
  </div>

 
<!---------------------------AQUI EMPIEZA LA SECCION DE STOCK------------------------------>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <section class="container">
  <main>
        <div class="container py-4 text-center">
            <h2>Stock</h2>
              <br>
            <div class="row py-4">
                <div class="col table-responsive">
                    <table>
                    <tbody id="content1">
                          <?php require_once 'php/stock.php';?>
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
  </div>


<!---------------------------AQUI EMPIEZA LA SECCION DE INVENTARIO------------------------------>

  <div class="tab-pane fade show" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
    <section class="container text-center">
      <br>
          <h2>Inventario</h2>
          <br>
    <div class="container-responsive">
  <div class="row">

    <div class="col-6 col-md-3 mb-4">
      <div class="card bg-primary text-light">
        <div class="card-body">
          <h5 class="card-title">
            <?php require 'php/consulta.php'; echo $total ?>
          </h5>
          <p class="card-text">Productos en inventario</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
      <div class="card bg-warning text-light">
        <div class="card-body">
          <h5 class="card-title">
            <?php require 'php/consulta.php'; echo "$ " . $total1 ?>
          </h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
      <div class="card bg-danger text-light">
        <div class="card-body">
          <h5 class="card-title">
            <?php require 'php/consulta.php'; echo "$ " . $total2 ?>
          </h5>
          <p class="card-text">costo del inventario</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
      <div class="card bg-success text-light">
        <div class="card-body">
          <h5 class="card-title">
            <?php require 'php/consulta.php'; echo "$ " . $total3 ?>
          </h5>
          <p class="card-text">utilidad total</p>
        </div>
      </div>
    </div>


</br>
</br>
</br>
</br>
</br>
</br>

    <div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card bg-light mb-3">
        <div class="card-header">Productos mas vendidos en el mes</div>
        <div class="card-body">
          
        <div class="row">
        <div class="col-6 col-md-4 mb-4">
      <div class="card bg-info text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-4">
      <div class="card bg-info text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-4">
      <div class="card bg-info text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
      </div>
    </div>

        </div>
      </div>
    </div>


    <div style="position:relative; top:40px;" class="col-lg-12 col-md-12">
      <div class="card bg-light mb-3">
        <div class="card-header">prodcutos menos vendidos en el mes</div>
        <div class="card-body">
         <div class="row">
        <div class="col-6 col-md-4 mb-4">
      <div class="card bg-secondary text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-4">
      <div class="card bg-secondary text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-4">
      <div class="card bg-secondary text-light">
        <div class="card-body">
          <h5 class="card-title">$10.000</h5>
          <p class="card-text">Precio del inventario</p>
        </div>
      </div>
      </div>
    </div>


        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

   
    </section>
</div>

</div>
</section>
</div>


<?php require ('../dashboard/layout/footer.php')?>