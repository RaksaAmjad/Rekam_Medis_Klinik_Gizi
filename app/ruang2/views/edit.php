<?php
require_once 'app/functions/MY_model2.php';

$id = $_GET['id'];
$ruang = get_where("SELECT * FROM kunjungan WHERE id = '$id' ");
$pasiens = get("SELECT * FROM pasien");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=ruang2" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Kunjungan</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/ruang2/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $ruang['id']; ?>">
              <div class="form-body">
                <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Pasien</label>
                      </div>
                      <div class="col-md-8">

                        <select class="select2 form-control" name="pasien_id" required>
                          <?php foreach ($pasiens as $pasien) : ?>
                            <option value="<?= $pasien['id']; ?>"><?= $pasien['nama_pasien']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Kunjungan</label>
                      </div>
                      <div class="col-md-8">
                        <input type="date" placeholder="tanggal kunjungan" class="form-control" name="tanggal_kunjungan" value="<?= $ruang['tanggal_kunjungan']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Kunjungan Ke-</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="kunjungan ke-" class="form-control" name="tanggal_monitoring" value="<?= $ruang['tanggal_monitoring']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Rincian Monitoring Evaluasi</label>
                      </div>
                      <div class="col-md-8">
                      <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Status Monitoring Evaluasi" name="status_monitoring"><?= $ruang['status_monitoring']; ?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Rencana Kunjungan Selanjutnya</label>
                      </div>
                      <div class="col-md-8">
                        <input type="date" placeholder="tanggal rencana" class="form-control" name="tanggal_rencana" value="<?= $ruang['tanggal_rencana']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>