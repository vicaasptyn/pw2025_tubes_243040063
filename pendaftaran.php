<?php include 'database2.php'; ?>
<?php
$alert = '';
if (isset($_POST['akun'])) {
    if (create_akun($_POST) > 0) {
        $alert = '<div class="alert alert-success text-center">Akun berhasil dibuat.</div>';
    } else {
        $alert = '<div class="alert alert-danger text-center">Gagal membuat akun.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027 0%, #2c5364 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .card {
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(44, 83, 100, 0.25);
            background: rgba(255,255,255,0.98);
            padding: 2.5rem 2.8rem;
            border: none;
            animation: fadeInUp 1s;
            transition: box-shadow 0.3s;
        }
        .card:hover {
            box-shadow: 0 16px 48px 0 rgba(44, 83, 100, 0.35);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .form-icon {
            width: 2.5rem;
            text-align: center;
            color: #1976d2;
            font-size: 1.3rem;
        }
        .form-control {
            border-radius: 0.75rem;
            border: 1.5px solid #b3c6e0;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.15);
        }
        .btn-primary {
            background: linear-gradient(90deg, #1976d2 0%, #64b5f6 100%);
            border: none;
            border-radius: 0.75rem;
            font-weight: 600;
            letter-spacing: 1px;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #1565c0 0%, #2196f3 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .text-primary {
            color: #1976d2 !important;
        }
        .alert-success {
            background: linear-gradient(90deg, #43cea2 0%, #185a9d 100%);
            color: #fff;
            border: none;
        }
        .alert-danger {
            background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%);
            color: #fff;
            border: none;
        }
        .fw-bold {
            color: #1976d2;
            letter-spacing: 1px;
        }
        a.text-primary:hover {
            color: #0d47a1 !important;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <h2 class="mb-4 text-center fw-bold">Daftar Akun Baru</h2>
                    <?php if ($alert) echo $alert; ?>
                    <form action="" method="post" autocomplete="off">
                        <div class="mb-3 input-group">
                            <span class="input-group-text form-icon">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text form-icon">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text form-icon">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="6" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2" name="akun">Daftar</button>
                    </form>
                    <div class="mt-3 text-center">
                        <small>Sudah punya akun? <a href="index.php" class="text-primary">Login di sini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>