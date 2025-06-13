<?php include 'database.php'?>

<?php $data_pelanggan = select ("SELECT * FROM datamobil");?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/data.css">
    <style>
        body {
            background: #f4f8fb;
        }
        .sidebar {
            min-width: 230px;
            min-height: 100vh;
            background: linear-gradient(135deg, #1565c0 60%, #42a5f5 100%);
            color: #fff;
        }
        .sidebar .navbar-brand {
            color: #fff;
        }
        .sidebar .nav-link {
            color: #bbdefb;
            transition: background 0.2s, color 0.2s;
        }
        .sidebar .nav-link.satu,
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #1976d2;
            color: #fff;
        }
        .navbar {
            background: linear-gradient(90deg, #1976d2 60%, #64b5f6 100%) !important;
            color: #fff;
        }
        .navbar .dropdown .btn-success {
            background: #1976d2;
            border: none;
        }
        .navbar .dropdown .btn-success:focus,
        .navbar .dropdown .btn-success:hover {
            background: #1565c0;
        }
        .navbar .dropdown-menu {
            background: #e3f2fd;
        }
        .navbar .dropdown-item:hover {
            background: #bbdefb;
        }
        .avatar {
            border: 2px solid #1976d2;
        }
        .card.border-success {
            border-color: #1976d2 !important;
        }
        .card.border-primary {
            border-color: #42a5f5 !important;
        }
        .card.border-warning {
            border-color: #64b5f6 !important;
        }
        .card .card-title {
            color: #1976d2;
        }
        .card .display-5 {
            color: #1976d2 !important;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Awal Sidebar -->
        <nav class="sidebar d-flex flex-column p-3"> 
            <a class="navbar-brand mb-4 fs-4 fw-bold text-white" href="#">
            <i class="bi bi-egg-fried"></i> Dealer Mobil
            </a>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="dashboard.php" class="nav-link satu">
                <i class="bi bi-graph-up-arrow me-2"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="adminsetting.php" class="nav-link">
                <i class="bi bi-person-plus me-2"></i>Data Pendaftaran
                </a>
            </li>
            <li>
                <a href="datapembeli.php" class="nav-link">
                <i class="bi bi-egg-fried me-2"></i>Data Pembeli
                </a>
            </li>
            <li>
                <a href="datamobil.php" class="nav-link">
                <i class="bi bi-bag-check me-2"></i>Data Mobil
                </a>
            </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1 d-flex flex-column min-vh-100">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light border-bottom">
                <div class="container-fluid justify-content-end">
                    <div class="dropdown">
                        <img src="https://ui-avatars.com/api/?name=<?= urlencode($_SESSION['username'][0] ?? 'U') ?>&background=1976d2&color=fff" class="avatar" alt="avatar">
                        <span class="me-2 fw-semibold text-white"><?= htmlspecialchars($_SESSION['username'] ?? 'User'); ?></span>
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ▼
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Ubah Password</a></li>
                            <li>
                                <form method="POST" class="d-inline">
                                    <button type="submit" name="logout" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- akhir sidebar -->

            <!-- Content -->
            <?php
            // Query untuk mendapatkan total pembeli
            $total_pembeli = 0;
            $result_pembeli = select("SELECT COUNT(*) as total FROM pembeli");
            if ($result_pembeli && isset($result_pembeli[0]['total'])) {
                $total_pembeli = $result_pembeli[0]['total'];
            }

            // Query untuk mendapatkan total mobil
            $total_mobil = 0;
            $result_mobil = select("SELECT COUNT(*) as total FROM datamobil");
            if ($result_mobil && isset($result_mobil[0]['total'])) {
                $total_mobil = $result_mobil[0]['total'];
            }

            // Query untuk mendapatkan total pendaftaran
            $total_pendaftaran = 0;
            $result_pendaftaran = select("SELECT COUNT(*) as total FROM pendaftaran");
            if ($result_pendaftaran && isset($result_pendaftaran[0]['total'])) {
                $total_pendaftaran = $result_pendaftaran[0]['total'];
            }
            ?>
            <div class="container py-4">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-success shadow-sm">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-basket display-5 me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Total Pembeli</h5>
                                    <h3 class="mb-0"><?= isset($total_pembeli) ? $total_pembeli : 0 ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary shadow-sm">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-list-ul display-5 me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Total Mobil</h5>
                                    <h3 class="mb-0"><?= isset($total_mobil) ? $total_mobil : 0 ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-warning shadow-sm">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-person-check display-5 me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Total Pendaftaran</h5>
                                    <h3 class="mb-0"><?= isset($total_pendaftaran) ? $total_pendaftaran : 0 ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir content -->

            <!-- content 2 -->

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>