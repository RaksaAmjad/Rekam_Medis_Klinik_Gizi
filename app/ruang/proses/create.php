<?php
session_start();
require_once '../../functions/MY_model.php';
$pasien_id = $_POST['pasien_id'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$tanggal_monitoring = $_POST['tanggal_monitoring'];
$status_monitoring = $_POST['status_monitoring'];
$tanggal_rencana = $_POST['tanggal_rencana'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO kunjungan VALUES(null, '$pasien_id', '$tanggal_kunjungan','$tanggal_monitoring','$status_monitoring','$tanggal_rencana', '$created_at', null, null, '$created_by', null, 0)";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=ruang";</script>';
} else {
  echo mysqli_error($conn);
}
