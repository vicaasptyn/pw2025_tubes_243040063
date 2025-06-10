<?php
include '../database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$datamobil = select("SELECT * FROM pendaftaran WHERE id = $id");
if ($datamobil && is_array($datamobil) && count($datamobil) > 0) {
    $datamobil = $datamobil[0];
} else {
    $datamobil = [];
}

if (isset($_POST['ubah'])) {
    if (ubah_setting($_POST) > 0) {
       echo "<script>alert('Setting berhasil diubah.');location.href = '../datamobil.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengubah setting.');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mobil | DRIFTORA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../../css/ubah.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <i class="bi bi-car-front-fill fs-3"></i>
                <span style="letter-spacing:2px;">DRIFTORA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="datamobil.php">
                            <i class="bi bi-table me-1"></i>Data Mobil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datapembeli.php">
                            <i class="bi bi-person-lines-fill me-1"></i>Data Pembeli
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminsetting.php">
                            <i class="bi bi-cash-coin me-1"></i>Admin Setting
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh; position:relative; z-index:1;">
        <div class="card card-login shadow-lg" style="width:100%; max-width:440px;">
            <div class="card-body p-0">
                <h5 class="card-title text-center mb-4">
                    <i class="bi bi-pencil-square me-2"></i>Ubah Data Admin
                </h5>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger text-center">Terjadi kesalahan saat mengubah data!</div>
                <?php endif; ?>
                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $datamobil['id'] ?? '' ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required value="<?= htmlspecialchars($datamobil['nama'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required value="<?= htmlspecialchars($datamobil['email'] ?? '') ?>">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru (kosongkan jika tidak ingin mengubah)">
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary w-100 mt-2">
                        <i class="bi bi-save2"></i> Simpan Perubahan
                    </button>
                    <a href="../datamobil.php" class="btn btn-outline-secondary w-100 mt-2">
                        <i class="bi bi-arrow-left"></i> Batal
                    </a>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        &copy; <?= date('Y'); ?> Database Mobil &mdash; Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh Tim Anda
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
