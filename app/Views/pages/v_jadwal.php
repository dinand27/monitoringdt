<main id="main" class="main">
       

            <div class="pagetitle">
            <h1><?php echo $title ?></h1>
            <nav>
                <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li> -->
                </ol>
            </nav>
            </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
<!-- batas perulangan di col-lg-6 -->
        <div class="col-lg-6"> 
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kelas Drum</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Jam</th>
                   </tr>
                </thead>
                <tbody>
                  <?php foreach($alldata as $row) : ?>
                  <tr>
                    <th scope="row"><?php echo $row->id ?></th>
                    <td><?php echo $row->hari ?></td>
                    <td><?php echo $row->tglkuliah ?></td>
                    <td><?php echo $row->jam ?></td>
                  </tr>
                  <?php endforeach; ?>
                 </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>      
      </div>


<!-- batas bawah ROW card -->
    </div>




  </main><!-- End #main -->