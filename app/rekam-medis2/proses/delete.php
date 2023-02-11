<?php
require_once 'app/functions/MY_model2.php';

$id = $_GET['id'];

if (delete("DELETE FROM rekam_medis WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= 'http://localhost/rekam_medis/index2.php?page=rekam-medis2';</script>";
} else {
  echo mysqli_error($conn);
}
