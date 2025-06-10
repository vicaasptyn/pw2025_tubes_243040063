<?php
include '../database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$datamobil = select("SELECT * FROM datamobil WHERE id = $id");





$datamobil = $datamobil[0];

if (isset($_POST['ubah'])) {
    if (ubah_mobil($_POST) > 0) {
       echo "<script>alert('Data mobil berhasil diubah.');location.href = '../datamobil.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengubah data mobil.');</script>";
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
                    <i class="bi bi-pencil-square me-2"></i>Ubah Data Mobil
                </h5>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger text-center">Terjadi kesalahan saat mengubah data!</div>
                <?php endif; ?>
                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $datamobil['id'] ?? '' ?>">
                    <div class="mb-3">
                        <label for="merek" class="form-label">Merek <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="merek" name="merek" placeholder="Masukkan merek mobil" required value="<?= htmlspecialchars($datamobil['merek']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan jenis mobil" required value="<?= htmlspecialchars($datamobil['jenis'] ) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun mobil" min="1900" max="<?= date('Y')+1 ?>" required value="<?= $datamobil['tahun']  ?>">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="form-label">Harga <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga mobil" min="0" required value="<?= $datamobil['harga']  ?>">
                        </div>
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
