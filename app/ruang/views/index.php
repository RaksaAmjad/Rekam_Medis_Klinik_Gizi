<?php
require_once 'app/functions/MY_model.php';
$ruangs = get("SELECT *, kunjungan.id as kunjungan_id FROM kunjungan kunjungan
                INNER JOIN pasien ON kunjungan.pasien_id = pasien.id");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kunjungan</h4>
          <a href="?page=tambah-ruang" class="btn btn-primary round waves-effect waves-light">
            Tambah Kunjungan
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Kunjungan Ke- </th>
                    <th>Rincian Monitoring Evaluasi</th>
                    <th>Tanggal Rencana Kunjungan Selanjutnya</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($ruangs as $ruang) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $ruang['nama_pasien']; ?></td>
                      <td><?= $ruang['tanggal_kunjungan']; ?></td>
                      <td><?= $ruang['tanggal_monitoring']; ?></td>
                      <td><?= $ruang['status_monitoring']; ?></td>
                      <td><?= $ruang['tanggal_rencana']; ?></td>
                      <td>
                        <a href="?page=edit-ruang&id=<?= $ruang['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-ruang&id=<?= $ruang['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'ruang'; ?>