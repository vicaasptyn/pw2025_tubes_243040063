
<?php
include 'database.php';



$data_mobil = select("SELECT * FROM pembeli");

// Tambahkan inisialisasi variabel $flash agar tidak error notice
$flash = '';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mobil | DRIFTORA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .navbar {
            border-radius: 0 0 18px 18px;
            background: linear-gradient(90deg, #007bff 60%, #6bc1ff 100%);
            box-shadow: 0 4px 24px rgba(0, 123, 255, 0.08);
        }
        .navbar-brand {
            font-size: 1.7rem;
            letter-spacing: 1px;
        }
        .card {
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            background: rgba(255, 255, 255, 0.97);
            border: none;
        }
        .card-header {
            border-top-left-radius: 22px;
            border-top-right-radius: 22px;
            background: linear-gradient(90deg, #007bff 60%, #6bc1ff 100%);
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.07);
        }
        .btn-primary,
        .btn-success,
        .btn-danger {
            border-radius: 20px;
            transition: 0.2s;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .btn-primary:hover,
        .btn-success:hover,
        .btn-danger:hover {
            filter: brightness(1.1);
            transform: translateY(-2px) scale(1.03);
        }
        .table th,
        .table td {
            vertical-align: middle;
        }
        .table thead {
            background: #f1f5fb;
        }
        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f8fafc;
        }
        .table-hover tbody tr:hover {
            background-color: #e3f2fd;
            transition: background 0.2s;
        }
        .add-btn {
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.08);
        }
        .icon-action {
            font-size: 1.1rem;
            vertical-align: middle;
        }
        .footer {
            margin-top: 60px;
            padding: 18px 0;
            background: linear-gradient(90deg, #007bff 60%, #6bc1ff 100%);
            color: #fff;
            text-align: center;
            border-radius: 18px 18px 0 0;
            font-size: 1rem;
            letter-spacing: 0.5px;
            box-shadow: 0 -2px 12px rgba(0, 123, 255, 0.07);
        }
        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2rem;
            }
            .card-header h4 {
                font-size: 1.1rem;
            }
            .footer {
                font-size: 0.95rem;
            }
        }
    </style>
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
                        <a class="nav-link " aria-current="page" href="datamobil.php">
                            <i class="bi bi-table me-1"></i>Data Mobil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="datapembeli.php">
                            <i class="bi bi-person-lines-fill me-1"></i>Data Pembeli
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminsetting.php">
                            <i class="bi bi-cash-coin me-1"></i>Data Transaksi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?= $flash ?>
        <div class="card shadow-lg">
            <div class="card-header text-white">
                <h4 class="mb-0"><i class="bi bi-table me-2"></i>Data Mobil</h4>
            </div>
            <div class="card-body">
                <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="fw-semibold text-secondary">
                        <i class="bi bi-info-circle me-1"></i>
                        Daftar mobil yang tersedia di database
                    </span>
                    <a href="tambah_mobil.php" class="btn btn-primary px-4 add-btn">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Mobil
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%;">No</th>
                                <th scope="col" style="width: 20%;">Merek</th>
                                <th scope="col" style="width: 20%;">Jenis</th>
                                <th scope="col" style="width: 15%;">Tahun</th>
                                <th scope="col" style="width: 20%;">Harga</th>
                                <th scope="col" style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($data_mobil) > 0): ?>
                                <?php $no = 1; ?>
                                <?php foreach ($data_mobil as $data): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars($data['nama']); ?></td>
                                        <td><?= htmlspecialchars($data['kontak']); ?></td>
                                        <td><?= htmlspecialchars($data['alamat']); ?></td>
                                        <td><?= $data['registrasi']; ?></td>
                                        <td class="text-center">
                                            <a href="ubah_mobil.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm me-1" title="Ubah">
                                                <i class="bi bi-pencil-square icon-action"></i>
                                            </a>
                                            <a href="hapus_mobil.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data mobil ini?');">
                                                <i class="bi bi-trash3 icon-action"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Data mobil belum tersedia.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-5">
        &copy; <?= date('Y'); ?> Database Mobil &mdash; Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh Tim Anda
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
