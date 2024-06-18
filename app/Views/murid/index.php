
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
                <th>Nama</th>
                <th>NickName</th>
                <th>NoHP</th>
                <th>TglLahir</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($alldata as $row): ?>
              <tr>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->nickname ?></td>
                <td><?php echo $row->nohp ?></td>
                <td><?php echo $row->tgllahir ?></td>
                <td><a href="/murid/<?php echo $row->id; ?>" class="btn btn-success">Detail </td>
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
