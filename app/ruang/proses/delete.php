<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$pasiens = get("SELECT * FROM pasien");


if (delete("DELETE FROM kunjungan WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=ruang';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=ruang';</script>";
}
