<?php 
include '../database.php';

$id = (int)$_GET['id'];

if (hapus_pembeli($id) >0) {
    echo "<script>alert('Data pembeli berhasil dihapus.'); window.location.href='../datamobil.php';</script>";
} else {
    echo "<script>alert('Data pembeli gagal dihapus.');</script>";
}
?>