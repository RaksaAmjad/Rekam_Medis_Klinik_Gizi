<?php
require_once 'app/functions/MY_model2.php';

$id = $_GET['id'];
$pasiens = get("SELECT * FROM pasien");


if (delete("DELETE FROM kunjungan WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= 'http://localhost/rekam_medis/index2.php?page=ruang2';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= 'http://localhost/rekam_medis/index2.php?page=ruang2';</script>";
}
