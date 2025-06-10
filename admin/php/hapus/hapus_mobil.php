<?php 
include '../database.php';

$id = (int)$_GET['id'];

if (hapus_mobil($id) >0) {
    echo "<script>alert('Data mobil berhasil dihapus.'); window.location.href='../datapembeli.php';</script>";
} else {
    echo "<script>alert('Data mobil gagal dihapus.');</script>";
}
?>