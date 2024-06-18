
<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $title; ?></h1>
  <nav>
    <ol class="breadcrumb">
      <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li> -->
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>
                  <b>N</b>ame
                </th>
                <th>ID</th>
                <th>Instrumen</th>
                <th data-type="date" data-format="YYYY/DD/MM">Tanggal Masuk</th>
                <th>Murid</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($staf as $s): ?>
              <tr>
                <td><?php echo $s['nama'];?> </td>
                <td><?php echo $s['nik'];  ?></td>
                <td><?php echo $s['nohp']?></td>
                <td><?php echo $s['tgl_masuk']?></td>
                <td><a href="/staf/<?php echo $s['id']; ?>" class="btn btn-success">Detail </td>
              </tr>
           <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
