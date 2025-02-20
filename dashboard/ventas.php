<?php require ('../dashboard/layout/layout.php')?>

<div class="container">
    <h1 style="position:relative; top:10px;" >Seccion Ventas</h1>
    <section style="position:relative; top:30px;" >
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Venta</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">clientes</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">registros ingreso y egreso</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false">ventas al contado</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-settings-tab" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button" role="tab" aria-controls="pills-settings" aria-selected="false">apartados y abonos</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-config-tab" data-bs-toggle="pill" data-bs-target="#pills-config" type="button" role="tab" aria-controls="pills-config" aria-selected="false">facturas</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-functions-tab" data-bs-toggle="pill" data-bs-target="#pills-functions" type="button" role="tab" aria-controls="pills-functions" aria-selected="false">reporte general caja</button>
  </li>
</ul>















<!--------------------------------------------- EMPIEZA VENTA ----------------------------------------------->

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <section class="container">
 
  <main>
      <div class="container py-4 text-center">
      <div class="input-group flex-nowrap">
<span class="input-group-text" id="addon-wrapping">
      <i class="fa-solid fa-search"></i>
</span>
<input type="text" class="form-control" name="search-input" id="search-input" placeholder="agregar producto" aria-describedby="addon-wrapping">
<ul id="search-results"></ul>  
</div>


<table id="selected-products">
<thead>
  <tr>
    <th>N°</th>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Precio total</th>
    <th>eliminar</th>
  </tr>
</thead>
<tbody>
</tbody>
</table>
     </div>
  </main>


<style>
#search-results {
position: absolute;
top: 36px;
left: 0;
right: 0;
background-color: white;
border: 1px solid #ddd;
border-top: none;
max-height: 200px;
overflow-y: scroll;
z-index: 1;
}
#search-results li {
padding: 8px 12px;
cursor: pointer;
}
#search-results li:hover {
background-color: #cfcfcf;
}
#selected-products {
margin-top: 20px;
border-collapse: collapse;
}
#selected-products th,
#selected-products td {
padding: 8px;
border: 1px solid #ddd;
text-align: center;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
$('#search-input').on('input', function() {
  var searchQuery = $(this).val();
  if (searchQuery.length >= 2) {
    $.ajax({
      url: 'php/search.php',
      type: 'POST',
      data: { search: searchQuery },
      success: function(response) {
        $('#search-results').html(response);
        $('.search-result').click(function() {
          var id = $(this).text();
          var product = $(this).text();
          var cantidad = $(this).data('cantidad');
          var price = $(this).data('price');
          var product = $(this).text();
          var price = $(this).data('price');
          var newRow = '<tr><td>' + id + '</td><td>' + product + '</td><td><input type="number" value="1"></td><td>' + price + '</td><td>' + price + '</td><td>' + '<button onclick="resetForm()"><i class="fa-solid fa-trash"></i></button>' + '</td></tr>';
          $('#selected-products tbody').append(newRow);
          $('#search-input').val('');
          $('#search-results').html('');
        });
        $('#search-results').show();
      }
    });
  } else {
    $('#search-results').html('');
    $('#search-results').hide();
  }
});
$(document).on('click', function(e) {
  if (!$(e.target).closest('#search-results').length && !$(e.target).closest('#search-input').length) {
    $('#search-results').hide();
  }
});
});
</script>
















  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
Generar venta
</button>
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
Generar apartado o abonos
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
cancelar venta
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Nueva venta</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form>
        <div class="mb-3">
          <label for="recipient-name" class="col-form-label">cliente</label>
          <input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="mb-3">
          <label for="message-text" class="col-form-label">Message:</label>
          <textarea class="form-control" id="message-text"></textarea>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger">Cancelar</button>
      <button type="button" class="btn btn-primary">Generar factura</button>
    </div>
  </div>
</div>
</div>

  </section>
  </div>
 














  
<!-------------------------------aqui empieza otra seccion------------------------------------------>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <section class="container">
        <p>hola4</p>
    </section>
  </div>



  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <section class="container">
        <p>hola5</p>
    </section>
  </div>




  <div class="tab-pane fade show" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
    <section class="container">
        <p>hola2</p>
    </section>
  </div>




  <div class="tab-pane fade show" id="pills-settings" role="tabpanel" aria-labelledby="pills-settings-tab">
    <section class="container">
        <p>hola3</p>
    </section>
  </div>




  <div class="tab-pane fade show" id="pills-config" role="tabpanel" aria-labelledby="pills-config-tab">
    <section class="container">
        <p>hola6</p>
    </section>
  </div>




  <div class="tab-pane fade show" id="pills-functions" role="tabpanel" aria-labelledby="pills-functions-tab">
    <section class="container">
        <p>hola7</p>
    </section>
  </div>


</div>
    </section>
</div>

<?php require ('../dashboard/layout/footer.php')?>