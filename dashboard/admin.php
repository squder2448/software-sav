<?php require ('../dashboard/layout/layout.php') ?>
        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenid@ <?php echo $_SESSION['nombres'] ?></h1>
                            <p class="lead text-muted">Revisa la última información</p>
                          </div>
                          <div class="col-lg-6 col-md-4 d-flex">
                          <button class="btn btn-primary w-100 align-self-center">
                            <a class="text-decoration-none text-light" href="usuarios.php">
                            <i class="fa-solid fa-users"></i> Usuarios</a></button>
                            &#160&#160  
                          <button class="btn btn-success w-100 align-self-center">
                          <a class="text-decoration-none text-light" href="#">
                          <i class="fa-solid fa-file-excel"></i> Descargar reporte</a>
                          </button>
                          </div>
                          
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted"> <i class="fa-solid fa-dollar-sign"></i>
                                        Vendido al contado</h6>
                                        <h3 class="font-weight-bold">$50.000</h3>
                                        <h6 class="text-success"><i class="fa-solid fa-cash"></i> 50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted"><i class="fa-solid fa-credit-card"></i>
                                            Anticipos y abonos</h6>
                                        <h3 class="font-weight-bold">100</h3>
                                        <h6 class="text-success"><i class="fa-solid fa-cash"></i> 25.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted"><i class="fa-solid fa-arrow-trend-up"></i>
                                            Entrada en efectivo</h6>
                                        <h3 class="font-weight-bold">2500</h3>
                                        <h6 class="text-success"><i class="fa-solid fa-cash"></i> 75.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted"><i class="fa-solid fa-arrow-trend-down"></i>
                                            Salidas de efectivo
                                        </h6>
                                        <h3 class="font-weight-bold">500</h3>
                                        <h6 class="text-success"><i class="fa-solid fa-cash"></i> 15.50%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Productos mas vendidos</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Ver todas</button>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart2" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Clientes frecuentes</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Ver todas</button>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart3" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Top cajeros</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$250</h6>
                                          <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Ver todas</button>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>


        </div>
        <?php require ('../dashboard/layout/footer.php') ?>
        </div>
    </div>

 <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>

<script>
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'line',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>

<script>
            var ctx = document.getElementById('myChart3').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'pie',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C4E5',
                            '#16C9E5',
                            '#311B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
