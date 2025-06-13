<?php
include '../../admin/php/database.php'; 
$mobil = select("SELECT * FROM datamobil");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Dealer Mobil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            margin: 0;
            min-height: 100vh;
        }
        nav {
            background: linear-gradient(90deg, #005bea 70%, #00c6fb 100%);
            box-shadow: 0 2px 16px #005bea22;
            padding: 0;
        }
        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 24px;
        }
        .navbar-brand {
            font-size: 1.7em;
            font-weight: 700;
            color: #fff;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .navbar-brand::before {
            content: "\1F697";
            font-size: 1.2em;
            margin-right: 8px;
        }
        .navbar-menu {
            list-style: none;
            display: flex;
            gap: 28px;
            margin: 0;
            padding: 0;
        }
        .navbar-menu li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        .navbar-menu li a.active,
        .navbar-menu li a:hover {
            background:rgb(149, 202, 255);
            color: #005bea;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto 0 auto;
            padding: 0 20px;
        }
        .search-container {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px #005bea22;
            padding: 12px 20px;
            margin-bottom: 36px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .search-container i {
            color: #005bea;
            font-size: 1.2em;
            margin-right: 10px;
        }
        .search-input {
            border: none;
            outline: none;
            font-size: 1em;
            width: 100%;
            background: transparent;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 28px;
            justify-content: center;
        }
        .col {
            flex: 1 1 220px;
            max-width: 260px;
            min-width: 220px;
            display: flex;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px #005bea22;
            overflow: hidden;
            transition: transform 0.18s, box-shadow 0.18s;
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px #005bea44;
        }
        .card-img-top {
            width: 100%;
            height: 170px;
            object-fit: cover;
            background: #e3e3e3;
            transition: filter 0.2s;
        }
        .card:hover .card-img-top {
            filter: brightness(0.95) saturate(1.2);
        }
        .card-body {
            padding: 18px 14px 20px 14px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-title {
            font-size: 1.2em;
            font-weight: 700;
            color: #005bea;
            margin-bottom: 8px;
        }
        .card-text {
            font-size: 1em;
            color: #444;
            margin: 2px 0;
        }
        .price {
            font-size: 1.1em;
            font-weight: 600;
            color: #00a859;
            margin-top: 8px;
        }
        /* Footer */
        footer {
            background: linear-gradient(90deg, #005bea 70%, #00c6fb 100%);
            color: #fff;
            padding: 40px 0 20px 0;
            margin-top: 70px;
            box-shadow: 0 -2px 24px #005bea33;
            border-radius: 24px 24px 0 0;
        }
        .footer-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 32px;
        }
        .footer-section {
            flex: 1;
            min-width: 200px;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 4px 0;
            transition: color 0.2s;
        }
        .footer-section ul li a:hover {
            color: #ffeb3b;
        }
        .footer-section .footer-title {
            font-weight: 600;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        .footer-section .footer-contact a {
            color: #fff;
            text-decoration: underline;
        }
        .footer-section .footer-social a {
            color: #fff;
            margin-right: 12px;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.2s;
        }
        .footer-section .footer-social a:hover {
            color: #ffeb3b;
        }
        @media (max-width: 900px) {
            .row { gap: 18px; }
            .col { max-width: 48%; }
            .footer-container { flex-direction: column; gap: 18px; }
        }
        @media (max-width: 600px) {
            .navbar-container { flex-direction: column; gap: 10px; }
            .row { gap: 12px; }
            .col { max-width: 100%; }
            .container { padding: 0 8px; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar-container">
            <div class="navbar-brand">
                Dealer Mobil
            </div>
            <ul class="navbar-menu">
                <li><a href="home.php">Beranda</a></li>
                <li><a href="mobil.php" class="active">Mobil</a></li>
                <li><a href="beli.php">Beli</a></li>
                <li><a href="../../index.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- Search -->
    <div class="container">
      <div class="search-container">
        <i class="fa fa-search"></i>
      </div>

      <!-- Katalog Produk -->
      <section id="daftar-menu">
        <div class="row">
            <?php if (!empty($mobil)): ?>
                <?php foreach ($mobil as $item): ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= htmlspecialchars('../../admin/img/' . $item['foto'], ENT_QUOTES, 'UTF-8') ?>"
                                 class="card-img-top"
                                 alt="<?= htmlspecialchars($item['merek'] . ' ' . $item['jenis'], ENT_QUOTES, 'UTF-8') ?>"
                                 loading="lazy"/>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= htmlspecialchars($item['merek'], ENT_QUOTES, 'UTF-8') ?>
                                </h5>
                                <p class="card-text">
                                    Jenis: <?= htmlspecialchars($item['jenis'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                                <p class="card-text">
                                    Tahun: <?= htmlspecialchars($item['tahun'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                                <p class="card-text price">
                                    Harga: Rp<?= number_format($item['harga'], 0, ',', '.') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-muted" style="width:100%;">Produk tidak tersedia.</p>
            <?php endif; ?>
        </div>
      </section>
    </div>
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div style="font-size:1.5em; font-weight:700; letter-spacing:1px; margin-bottom:10px;">
                    <span style="color:#ffeb3b;">&#128663;</span> Dealer Mobil
                </div>
                <div class="footer-contact" style="font-size:1em; opacity:0.92;">
                    Jl. HTS No. 123, Bandung<br>
                    Telp: <a href="tel:02112345678">021-12345678</a>
                </div>
                <div class="footer-social" style="margin-top:18px; font-size:1.1em;">
                    <a href="https://instagram.com/" target="_blank">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                    <a href="mailto:info@dealermobil.com">
                        <i class="fa fa-envelope"></i> Email
                    </a>
                </div>
            </div>
            <div class="footer-section">
                <div class="footer-title">Navigasi</div>
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="mobil.php">Mobil</a></li>
                    <li><a href="beli.php">Beli</a></li>
                    <li><a href="promo.php">Promo</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <div class="footer-title">Jam Operasional</div>
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
</body>
</html>
