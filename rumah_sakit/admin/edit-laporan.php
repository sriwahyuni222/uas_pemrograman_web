<?php
require 'config/koneksi.php';
$no = $_GET['id'];
$detail_laporan = mysqli_query($koneksi,"SELECT * FROM laporan WHERE no = '$no'")->fetch_assoc();
require 'config/header.php';

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Laporan</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-laporan.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Edit Data</a></div>
                <div class="card-body">
                  <form action="update-laporan.php" method="POST">
                  <div class="form-group row">
                    <input type="hidden" name="id" value="<?= $no ?>">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode laporan</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_laporan" value="<?= $detail_laporan['kd_laporan'] ?>" placeholder="Kode Laporan" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?= $detail_laporan['nama'] ?>" placeholder="Nama" required>
                      </div>
                    </div>
                   <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_masuk" value="<?= $detail_laporan['tanggal_masuk'] ?>" placeholder="Tanggal Masuk" required>
                      </div>
                    </div>
                   <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_keluar" value="<?= $detail_laporan['tanggal_keluar'] ?>" placeholder="Tanggal Keluar" required>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Diagnosa</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="diagnosa" value="<?= $detail_laporan['diagnosa'] ?>" placeholder="Diagnosa" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Biaya Rumah Sakit</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="biaya_rumahsakit" value="<?= $detail_laporan['biaya_rumahsakit'] ?>" placeholder="Biaya Rumah Sakit" required>
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