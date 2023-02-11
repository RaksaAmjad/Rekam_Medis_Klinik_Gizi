<?php
session_start();
require_once '../../functions/MY_model2.php';
$nama_pasien = $_POST['nama_pasien'];
$nomor_identitas = $_POST['nomor_identitas'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$lingkar_lengan = $_POST['lingkar_lengan'];
$status_awal = $_POST['status_awal'];
$keluhan_awal = $_POST['keluhan_awal'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO pasien VALUES(null, '$nomor_identitas', '$nama_pasien','$tgl_lahir','$jenis_kelamin','$berat_badan','$tinggi_badan','$lingkar_lengan','$status_awal','$keluhan_awal','$alamat', '$telephone', '$created_at', null, null, '$created_by', null, null)";
if (create($query) === 1) {
  echo '<script>document.location.href="http://localhost/rekam_medis/index2.php?page=pasien2";</script>';
} else {
  echo mysqli_error($conn);
}
