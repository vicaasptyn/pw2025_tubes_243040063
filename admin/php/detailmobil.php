<?php
include 'database.php';

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
    <title>Detail Mobil | DRIFTORA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/ubah.css">
    <style>
        body {
            background: linear-gradient(120deg, #e0f7fa 0%, #f8fafc 100%);
            min-height: 100vh;
        }

        .card-detail {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px rgba(60, 60, 60, 0.08);
            padding: 2.5rem 2rem;
        }

        .badge-custom {
            background: linear-gradient(90deg, #00b894 60%, #00cec9 100%);
            color: #fff;
        }

        .footer {
            text-align: center;
            padding: 1rem 0;
            background: transparent;
            font-size: 1rem;
            color: #888;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3" style="background: #00b894;">
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
    <!-- Card Detail Mobil -->
    <div class="container d-flex align-items-center justify-content-center" style="min-height:80vh;">
        <div class="card card-detail shadow-lg" style="max-width: 500px; width:100%;">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-success mb-1">Detail Data Mobil</h2>
            </div>
            <div class="row mb-4">
                <div class="col-12 text-center mb-3">
                    <?php if (!empty($datamobil['foto'])): ?>
                        <img src="../img/<?= htmlspecialchars($datamobil['foto']) ?>" alt="Foto Mobil" class="img-fluid rounded-3 border shadow-sm" style="max-height:200px;">
                    <?php else: ?>
                        <div class="d-flex align-items-center justify-content-center bg-light rounded-3" style="height:200px;">
                            <span class="text-muted">Tidak ada foto</span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th class="text-secondary" style="width: 40%;">Merek</th>
                            <td class="fw-semibold"><?= htmlspecialchars($datamobil['merek']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Jenis</th>
                            <td><?= htmlspecialchars($datamobil['jenis']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Tahun</th>
                            <td><?= htmlspecialchars($datamobil['tahun']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Harga</th>
                            <td class="fw-semibold text-success">Rp <?= number_format($datamobil['harga'], 0, ',', '.') ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="../datamobil.php" class="btn btn-outline-success w-100 mt-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
    <!-- Akhir Card Detail Mobil -->
    <footer class="footer mt-5">
        &copy; <?= date('Y'); ?> Database Mobil &mdash; Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh Tim Anda
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>