<?php echo $this->extend('/layout/template'); ?>

<?php echo $this->section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
    
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

        <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo $murid->foto ?>" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $murid->nama ?></h5>
                  <p class="card-text">Panggilan: <b><?php echo $murid->nickname ?></b>, Tanggal Lahir: <b><?php echo $murid->tgllahir ?></b>, Alamat: <b><?php echo $murid->alamat ?></b> ,
                    No.hp <b><?php echo $murid->nohp ?></b>  </p>
                

                  </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
    </section>

  </main><!-- End #main -->


<?php echo $this->endSection(); ?>