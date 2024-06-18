<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title; ?></h1>
     
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Staf</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <a class="nav-link " href="#Staf">
                      <i class="bi bi-person-badge"></i> </a>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">Staf</span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

             
                <div class="card-body">
                  <h5 class="card-title">Total <span>| Kelas</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <a class="nav-link " href="#kelas">
                    <i class="bi bi-pencil-square"></i></a>

                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-success small pt-1 fw-bold">Class</span> <span class="text-muted small pt-2 ps-1"> </span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

             
                <div class="card-body">
                  <h5 class="card-title">Total <span>| Students</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <a class="nav-link " href="#Anggota">  
                    <i class="bi bi-people"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-success small pt-1 fw-bold">Students</span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

              
                <div class="card-body">
                  <h5 class="card-title">Jumlah <span>/DT Breakdown</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Hadir',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Ijin',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Lulus',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'char',
                          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->


            <!-- Top Selling -->
            <div class="col-12"><!--
              <div class="card top-selling overflow-auto">

            
                <div class="card-body pb-0">
                  <h5 class="card-title">Top Student <span>| Monthly</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div> -->
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">


          <!-- News & Updates Traffic -->
          <div class="card">
           
            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="<?php echo base_url('') ?>/assets/img/logo_sam.png" alt=""> 
                  <h4><a href="#">Info DT Breakdown</a></h4>
                  <p>Berisi Update Info- info terkait DT Brekdown atau yang lain</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php echo $this->endSection(); ?>