<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Dokter</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-dokter.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <form action="simpan-dokter.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Dokter</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kode_dokter" placeholder="Kode Dokter">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Dokter">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender">
                          <option>Silahkan Pilih</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat"></textarea>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Gaji</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="gaji" placeholder="Gaji">
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