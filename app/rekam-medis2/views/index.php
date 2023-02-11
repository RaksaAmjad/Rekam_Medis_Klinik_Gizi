<?php
require_once 'app/functions/MY_model.php';
$rekam_medis = get("SELECT *, rm.id as rm_id FROM rekam_medis rm
                    INNER JOIN pasien ON rm.pasien_id = pasien.id 
                    INNER JOIN dokter ON rm.dokter_id = dokter.id");

$no = 1;

$title = 'rekam_medis';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rekam Medis</h4>
          <a href="?page=tambah-rekam-medis2" class="btn btn-primary round waves-effect waves-light">
            Tambah Rekam Medis
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
                    <th>Assessment</th>
                    <th>Diagnosa</th>
                    <th>Rencana Intervensi</th>
                    <th>Rencana Monitoring Evaluasi</th>
                    <th>Hasil Monitoring Evaluasi</th>
                    <th>Ahli gizi</th>
                    <th>Rekomendasi Obat</th>
                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rekam_medis as $rm) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $rm['nama_pasien']; ?></td>
                      <td><?= $rm['tanggal']; ?></td>
                      <td><?= $rm['assessment']; ?></td>
                      <td><?= $rm['diagnosa']; ?></td>
                      <td><?= $rm['intervensi']; ?></td>
                      <td><?= $rm['rencana_evaluasi']; ?></td>
                      <td><?= $rm['hasil_evaluasi']; ?></td>
                      <td><?= $rm['nama_dokter']; ?></td>
                      <td>
                        <?php
                        $obats = mysqli_query($conn, "SELECT * FROM rm_obat JOIN obat ON rm_obat.obat_id = obat.id WHERE rm_id = '$rm[rm_id]'") or die(mysqli_error($conn));
                        while ($obat = mysqli_fetch_assoc($obats)) {
                          echo $obat['nama_obat'] . '<br>';
                        }
                        ?>
                      </td>
                      <td>
                        <a href="?page=hapus-rekam-medis2&id=<?= $rm['rm_id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'rekam_medis2'; ?>