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
    <link rel="stylesheet" href="../css/style.css">
    <!-- plugin table -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
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
                            <i class="bi bi-cash-coin me-1"></i>Admin Setting
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                         <i class="bi bi-graph-up-arrow me-2"></i>Dashboard  
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
                <h4 class="mb-0"><i class="bi bi-table me-2"></i>Data Pembeli</h4>
            </div>
            <div class="card-body">
                <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="fw-semibold text-secondary">
                        <i class="bi bi-info-circle me-1"></i>
                        Daftar pembeli yang tersedia di database
                    </span>
                    <a href="../../public/php/beli.php" class="btn btn-primary px-4 add-btn">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Pembeli
                    </a>
                </div>
                <div class="table-responsive">
                <table class="table table-hover table-striped align-middle" id="table" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%;">No</th>
                                <th scope="col" style="width: 20%;">Nama</th>
                                <th scope="col" style="width: 20%;">Kontak</th>
                                <th scope="col" style="width: 15%;">Alamat</th>
                                <th scope="col" style="width: 20%;">Jenis Mobil</th>
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
                                        <td><?= $data['jenis_mobil']; ?></td>
                                        <td class="text-center">
                                            <a href="ubah/ubah_pembeli.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm me-1" title="Ubah">
                                                <i class="bi bi-pencil-square icon-action"></i>
                                            </a>
                                            <a href="hapus/hapus_pembeli.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data mobil ini?');">
                                                <i class="bi bi-trash3 icon-action"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Data pembeli belum tersedia.</td>
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
    <!-- plagin bootstrap -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
      });
    });
  </script>
</body>

</html>