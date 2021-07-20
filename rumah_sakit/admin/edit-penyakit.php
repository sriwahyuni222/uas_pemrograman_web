<?php
require 'config/koneksi.php';
$no = $_GET['id'];
$detail_penyakit = mysqli_query($koneksi,"SELECT * FROM penyakit WHERE no = '$no'")->fetch_assoc();
require 'config/header.php';

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Penyakit</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-penyakit.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Edit Data</a></div>
                <div class="card-body">
                  <form action="update-penyakit.php" method="POST">
                  <div class="form-group row">
                    <input type="hidden" name="id" value="<?= $no ?>">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_penyakit" value="<?= $detail_penyakit['kd_penyakit'] ?>" placeholder="Kode Penyakit">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_penyakit" value="<?= $detail_penyakit['nama_penyakit'] ?>" placeholder="Nama Penyakit">
                      </div>
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </section>
      </div>
<?php
require 'config/footer.php';
?>