<?php
require_once 'app/functions/MY_model2.php';

$id = $_GET['id'];
$pasien = get_where("SELECT * FROM pasien WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=pasien2" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Pasien</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/pasien2/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Identitas</label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Nomor Identitas" class="form-control" name="nomor_identitas" value="<?= $pasien['nomor_identitas']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama Pasien" class="form-control" name="nama_pasien" value="<?= $pasien['nama_pasien']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label>Tanggal Lahir</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Tanggal Lahir" class="form-control" name="tgl_lahir" value="<?= $pasien['tgl_lahir']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nomor Hp" class="form-control" name="telephone" value="<?= $pasien['telephone']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Alamat" name="alamat"><?= $pasien['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="col-md-8">
                        <ul class="list-unstyled mb-0">
                          <li class="d-inline-block mr-2">
                            <fieldset>
                              <div class="vs-radio-con">
                                <input type="radio" <?= ($pasien['jenis_kelamin'] == 'l' ? 'checked' : ''); ?> name="jenis_kelamin" value="l">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Laki-laki</span>
                              </div>
                            </fieldset>
                          </li>
                          <li class="d-inline-block mr-2">
                            <fieldset>
                              <div class="vs-radio-con">
                                <input type="radio" name="jenis_kelamin" <?= ($pasien['jenis_kelamin'] == 'p' ? 'checked' : ''); ?> value="p">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Perempuan</span>
                              </div>
                            </fieldset>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Berat Badan (Kg)</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Berat Badan" class="form-control" name="berat_badan" value="<?= $pasien['berat_badan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label>Tinggi Badan (Cm)</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Tinggi Badan" class="form-control" name="tinggi_badan" value="<?= $pasien['tinggi_badan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label>Lingkar Lengan (Cm)</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Lingkar Lengan" class="form-control" name="lingkar_lengan" value="<?= $pasien['lingkar_lengan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label>Status Awal</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Status Awal" class="form-control" name="status_awal" value="<?= $pasien['status_awal']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label>Keluhan Awal</label>
                      </div>
                      <div class="col-md-8">
                      <input type="text" placeholder="Keluhan Awal" class="form-control" name="keluhan_awal" value="<?= $pasien['keluhan_awal']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">

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