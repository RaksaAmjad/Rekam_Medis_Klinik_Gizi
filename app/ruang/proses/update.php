<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$pasien_id = $_POST['pasien_id'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$tanggal_monitoring = $_POST['tanggal_monitoring'];
$status_monitoring = $_POST['status_monitoring'];
$tanggal_rencana = $_POST['tanggal_rencana'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE kunjungan SET pasien_id = '$pasien_id', tanggal_kunjungan = '$tanggal_kunjungan', tanggal_monitoring = '$tanggal_monitoring', status_monitoring = '$status_monitoring', tanggal_rencana = '$tanggal_rencana', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=ruang";</script>';
} else {
  echo mysqli_error($conn);
}
