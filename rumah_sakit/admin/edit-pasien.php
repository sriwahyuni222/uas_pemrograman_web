<?php
require 'config/koneksi.php';
$no = $_GET['id'];
$detail_pasien = mysqli_query($koneksi,"SELECT * FROM pasien WHERE no = '$no'")->fetch_assoc();
require 'config/header.php';

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pasien</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-pasien.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Edit Data</a></div>
                <div class="card-body">
                  <form action="update-pasien.php" method="POST">
                  <div class="form-group row">
                    <input type="hidden" name="id" value="<?= $no ?>">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Pasien</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_pasien" value="<?= $detail_pasien['kd_pasien'] ?>" placeholder="Kode Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?= $detail_pasien['nama'] ?>" placeholder="Nama Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender" id="gender">
                          <option>Silahkan Pilih</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        <script>
                          $(document).ready(function(){
                            $('#gender').val(`<?= $detail_pasien['jk'] ?>`)
                          })
                        </script>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat"><?=  $detail_pasien['alamat'] ?></textarea>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">periksa</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="periksa" value="<?= $detail_pasien['periksa'] ?>" placeholder="periksa">
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