<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM pasien WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= 'http://localhost/rekam_medis/index2.php?page=pasien2';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= 'http://localhost/rekam_medis/index2.php?page=pasien2';</script>";
}
