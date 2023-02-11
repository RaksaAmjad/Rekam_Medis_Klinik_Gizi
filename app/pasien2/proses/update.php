<?php
session_start();
require_once '../../functions/MY_model2.php';

$id = $_POST['id'];
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
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE pasien SET nomor_identitas = '$nomor_identitas', nama_pasien = '$nama_pasien', tgl_lahir = '$tgl_lahir', alamat = '$alamat', telephone = '$telephone', jenis_kelamin = '$jenis_kelamin', berat_badan = '$berat_badan', tinggi_badan = '$tinggi_badan', lingkar_lengan = '$lingkar_lengan', status_awal = '$status_awal', keluhan_awal = '$keluhan_awal', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="http://localhost/rekam_medis/index2.php?page=pasien2";</script>';
} else {
  echo mysqli_error($conn);
}
