<?php
session_start();
require_once '../../functions/MY_model.php';
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];
$assessment = $_POST['assessment'];
$diagnosa = $_POST['diagnosa'];
$intervensi = $_POST['intervensi'];
$rencana_evaluasi = $_POST['rencana_evaluasi'];
$hasil_evaluasi = $_POST['hasil_evaluasi'];
$tanggal = $_POST['tanggal'];
$obat_id = $_POST['obat_id'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO rekam_medis VALUES(null, '$pasien_id', '$dokter_id', '$assessment', '$diagnosa','$intervensi','$rencana_evaluasi','$hasil_evaluasi', '$tanggal', '$created_at', null, null, '$created_by', null, null)";
if (create($query) === 1) {
  $rm_id = mysqli_insert_id($conn);
  foreach ($obat_id as $obat) {
    $save_rmobat = "INSERT INTO rm_obat(obat_id, rm_id) VALUES('$obat', '$rm_id')";
    if (create($save_rmobat) > 0) {
    } else {
      echo mysqli_error($conn);
    }
    echo '<script>document.location.href="../../../?page=rekam-medis";</script>';
  }
} else {
  echo mysqli_error($conn);
}
