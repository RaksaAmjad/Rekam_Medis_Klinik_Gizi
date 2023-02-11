<?php
require_once 'app/functions/MY_model.php';

$pasiens = get("SELECT * FROM pasien");
$dokters = get("SELECT * FROM dokter");
$ruangs = get("SELECT * FROM ruang");
$obats = get("SELECT * FROM obat");
?>

<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=rekam-medis" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Rekam Medis</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/rekam-medis/proses/create.php" method="post">
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
                        <label>Assessment</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="assessment" name="assessment" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Diagnosa</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="diagnosa" name="diagnosa" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Rencana Intervensi</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="rencana intervensi" name="intervensi" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Rencana Monitoring Evaluasi</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="rencana monitoring evaluasi" name="rencana_evaluasi" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Hasil Monitoring Evaluasi</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="hasil monitoring evaluasi" name="hasil_evaluasi" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Ahli Gizi</label>
                      </div>
                      <div class="col-md-8">
                        <select class="select2 form-control" name="dokter_id" required>
                          <?php foreach ($dokters as $dokter) : ?>
                            <option value="<?= $dokter['id']; ?>"><?= $dokter['nama_dokter']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Rekomendasi Obat</label>
                      </div>
                      <div class="col-md-8">
                        <select multiple class="form-control" name="obat_id[]" size="7" required>
                          <?php foreach ($obats as $obat) : ?>
                            <option value="<?= $obat['id']; ?>"><?= $obat['nama_obat']; ?></option>
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
                        <input type="date" placeholder="Tanggal Kunjungan" class="form-control" name="tanggal" required>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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

<?php

$addon_script = ['assets/vendors/js/forms/select/select2.full.min.js', 'assets/js/scripts/forms/select/form-select2.js'];

?>