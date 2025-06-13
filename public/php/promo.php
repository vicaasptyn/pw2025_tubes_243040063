<?php
// promo.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promo Spesial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        }
        .promo-card {
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
            box-shadow: 0 2px 8px rgba(33,150,243,0.08);
            position: relative;
            background: #f5faff;
        }
        .promo-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px rgba(33,150,243,0.18);
        }
        .promo-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: #1976d2;
            color: #fff;
            padding: 0.4em 1em;
            border-radius: 1em;
            font-size: 0.9em;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(25,118,210,0.15);
            z-index: 2;
        }
        .promo-badge.bg-success {
            background: #2196f3 !important;
        }
        .promo-badge.bg-warning {
            background: #90caf9 !important;
            color: #0d47a1 !important;
        }
        .card-img-top {
            object-fit: cover;
            height: 220px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .btn-gradient {
            background: linear-gradient(90deg, #1976d2 0%, #64b5f6 100%);
            color: #fff;
            border: none;
            transition: background 0.2s;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #1565c0 0%, #1976d2 100%);
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #1976d2 0%, #64b5f6 100%); box-shadow: 0 2px 8px rgba(33,150,243,0.12);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Promo Spesial</a>
        </div>
    </nav>
    <div class="container">
        <h1 class="mb-4 text-center fw-bold" style="color:#1976d2;">Promo Terbaru & Penawaran Spesial</h1>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card promo-card h-100">
                    <span class="promo-badge">HOT</span>
                    <img src="../img/diskon.png" class="card-img-top" alt="Promo 1">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Diskon Akhir Tahun</h5>
                        <p class="card-text">Dapatkan potongan hingga Rp 20 juta untuk pembelian mobil baru!</p>
                        <a href="#" class="btn btn-gradient w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card promo-card h-100">
                    <span class="promo-badge bg-success">BARU</span>
                    <img src="../img/special.png" class="card-img-top" alt="Promo 2">
                    <div class="card-body">
                        <h5 class="card-title text-primary"></h5>Cicilan Ringan
                        <p class="card-text">Cicilan mulai dari Rp 2 juta/bulan <b>tanpa DP!. </b></p>
                        <a href="#" class="btn btn-gradient w-100">Ajukan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card promo-card h-100">
                    <span class="promo-badge bg-warning">LIMITED</span>
                    <img src="../img/gift.png" class="card-img-top" alt="Promo 3">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Bonus Hadiah Menarik</h5>
                        <p class="card-text">Setiap pembelian produk tertentu akan mendapatkan hadiah menarik. <b>Stok terbatas!</b></p>
                        <a href="#" class="btn btn-gradient w-100">Cek Promo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <footer style="background: linear-gradient(90deg, #005bea 70%, #00c6fb 100%); color:#fff; padding:40px 0 20px 0; margin-top:70px; box-shadow:0 -2px 24px #005bea33; border-radius:24px 24px 0 0;">
        <div style="max-width:1100px; margin:0 auto; padding:0 20px; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:flex-start; gap:32px;">
            <div style="flex:1; min-width:220px;">
                <div style="font-size:1.5em; font-weight:700; letter-spacing:1px; margin-bottom:10px;">
                    <span style="color:#ffeb3b;">&#128663;</span> Dealer Mobil
                </div>
                <div style="font-size:1em; opacity:0.92;">
                    Jl. HTS No. 123, Bandung<br>
                    Telp: <a href="tel:02112345678" style="color:#fff; text-decoration:underline;">021-12345678</a>
                </div>
                <div style="margin-top:18px; font-size:1.1em;">
                    <a href="https://instagram.com/" target="_blank" style="color:#fff; margin-right:12px; text-decoration:none;">
                        <span style="font-size:1.3em;">&#x1F4F7;</span> Instagram
                    </a>
                    <a href="mailto:info@dealermobil.com" style="color:#fff; text-decoration:none;">
                        <span style="font-size:1.3em;">&#x2709;&#xFE0F;</span> Email
                    </a>
                </div>
            </div>
            <div style="flex:1; min-width:180px;">
                <div style="font-weight:600; font-size:1.1em; margin-bottom:10px;">Navigasi</div>
                <ul style="list-style:none; padding:0; margin:0;">
                    <li><a href="home.php" style="color:#fff; text-decoration:none; display:block; padding:4px 0;">Beranda</a></li>
                    <li><a href="mobil.php" style="color:#fff; text-decoration:none; display:block; padding:4px 0;">Mobil</a></li>
                    <li><a href="beli.php" style="color:#fff; text-decoration:none; display:block; padding:4px 0;">Beli</a></li>
                    <li><a href="promo.php" style="color:#fff; text-decoration:none; display:block; padding:4px 0;">Promo</a></li>
                </ul>
            </div>
            <div style="flex:1; min-width:220px;">
                <div style="font-weight:600; font-size:1.1em; margin-bottom:10px;">Jam Operasional</div>
                <div style="font-size:1em;">
                    Senin - Jumat: 08.00 - 18.00<br>
                    Sabtu: 09.00 - 15.00<br>
                    Minggu &amp; Libur: Tutup
                </div>
                <div style="margin-top:18px; font-size:0.98em; opacity:0.8;">
                    &copy; <?= date('Y') ?> Dealer Mobil. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>