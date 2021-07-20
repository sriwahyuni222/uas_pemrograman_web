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
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode laporan</th>
                      <th>Nama</th>
                      <th>Tanggal masuk</th>
                      <th>Tanggal keluar</th>
                      <th>Diagnosa</th>
                      <th>biaya rumahsakit</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php 
                      $no=1;
                      $pasien = query("SELECT * FROM laporan");
                    ?>
                    <tbody>
                      <?php foreach ($pasien as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_laporan"];?></td>
                      <td><?php echo $baris["nama"];?></td>
                      <td><?php echo $baris["tanggal_masuk"];?></td>
                      <td><?php echo $baris["tanggal_keluar"];?></td>
                      <td><?php echo $baris["diagnosa"];?></td>
                      <td><?php echo $baris["biaya_rumahsakit"];?></td>
                       <td>
                        <a href="edit-laporan.php?id=<?= $baris['no'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                        <a href="hapus-laporan.php?id=<?php echo $baris["no"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                       <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </section>
      </div>
<?php
require 'config/footer.php';
?>