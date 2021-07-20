<?php
require 'config/koneksi.php';
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
              <div class="card-header"><a href="form-laporan.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <form action="simpan-laporan.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Laporan</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_laporan" placeholder="Kode Laporan" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama pasien" required>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_masuk" placeholder="Tanggal masuk" required>
                      </div>
                    </div>
                    <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_keluar" placeholder="Tanggal keluar" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Diagnosa</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="diagnosa" required></textarea>
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Biaya Rumah Sakit</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="biaya_rumahsakit" placeholder="Biaya Rumah Sakit" required>
                      </div>
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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