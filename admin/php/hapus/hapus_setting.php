<?php 
include '../database.php';

$id = (int)$_GET['id'];

if (hapus_setting($id) >0) {
    echo "<script>alert('Data berhasil dihapus.'); window.location.href='../adminsetting.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus.');</script>";
}
?>