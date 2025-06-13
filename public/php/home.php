<?php
session_start();
// home.php

$featuredCars = [
    [
        'name' => 'Toyota Supra',
        'image' => '../img/supra.jpg',
        'price' => 'Rp 2.188.000.000',
        'promo' => 'Diskon 10%'
    ],
    [
        'name' => 'Hyundai Palisade',
        'image' => '../img/palisade.jpg',
        'price' => 'Rp 750.000.000',
        'promo' => 'Cicilan 0% 1 Tahun'
    ],
    [
        'name' => 'BMW 320i',
        'image' => '../img/bmw.jpg',
        'price' => 'Rp 255.000.000',
        'promo' => 'Gratis Servis 1 Tahun'
    ]
];

$testimonials = [
    [
        'name' => 'Budi ',
        'review' => 'Pelayanan sangat ramah dan proses pembelian cepat!',
        'photo' => '../img/men.jpg'
    ],
    [
        'name' => 'Cici',
        'review' => 'Mobil sesuai dengan yang diiklankan, sangat puas!',
        'photo' => '../img/wowmen.jpg'
    ]
];

$promos = [
    [
        'title' => 'Diskon Akhir Tahun',
        'desc' => 'Dapatkan potongan hingga Rp 20 juta untuk pembelian mobil baru!'
    ],
    [
        'title' => 'Cicilan Ringan',
        'desc' => 'Cicilan mulai dari Rp 2 juta/bulan tanpa DP!'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Dealer Mobil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="navbar-container">
            <div class="navbar-brand">
                Dealer Mobil
            </div>
            <ul class="navbar-menu">
                <li><a href="home.php" class="active">Beranda</a></li>
                <li><a href="mobil.php">Mobil</a></li>
                <li><a href="beli.php">Beli</a></li>
                <li><a href="../../index.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner Utama -->
    <div class="banner" style="border-radius: 32px; margin: 32px 24px 0 24px; overflow: hidden; box-shadow: 0 6px 32px #005bea22; position: relative;">
        <div style="position: relative; z-index: 2; padding-top: 32px; padding-bottom: 32px;">
            <h1 style="text-shadow:0 4px 24px #005bea77; font-size:2.5em; font-weight:700; margin-bottom:15px;">Temukan Mobil Impian Anda!</h1>
            <p style="text-shadow:0 2px 8px #005bea55; font-size:1.2em; margin-bottom:30px;">Dapatkan promo menarik & penawaran spesial hanya di Dealer Mobil Kami.</p>
            <a href="#cars" style="background:#fff; color:#005bea; padding:12px 32px; border-radius:30px; text-decoration:none; font-weight:bold; font-size:1.1em; box-shadow:0 2px 8px #005bea33; transition:background 0.2s, color 0.2s;">Lihat Mobil Unggulan</a>
        </div>
        <!-- Decorative shapes -->
        <div style="position:absolute;top:10%;left:-60px;width:180px;height:180px;background:rgba(0,94,234,0.12);border-radius:50%;z-index:1;"></div>
        <div style="position:absolute;bottom:-60px;right:10%;width:120px;height:120px;background:rgba(0,198,251,0.13);border-radius:50%;z-index:1;"></div>
        <div style="position:absolute;bottom:20px;left:20%;width:60px;height:60px;background:rgba(255,255,255,0.18);border-radius:50%;z-index:1;"></div>
    </div>

    <div class="container">
 <!-- Daftar Mobil Unggulan -->
        <section id="cars">
            <div class="section-title">Mobil Unggulan</div>
            <div class="cars">
                <?php foreach ($featuredCars as $car): ?>
                    <div class="car-card">
                        <img src="<?= htmlspecialchars($car['image']) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
                        <h3><?= htmlspecialchars($car['name']) ?></h3>
                        <div class="price"><?= htmlspecialchars($car['price']) ?></div>
                        <div class="promo"><?= htmlspecialchars($car['promo']) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Testimoni Pelanggan -->
        <section style="margin-top:50px;">
            <div class="section-title" style="text-align:center;">Apa Kata Pelanggan Kami?</div>
            <div class="testimonials" style="justify-content:center;">
                <?php foreach ($testimonials as $t): ?>
                    <div class="testimonial-card" style="box-shadow:0 4px 16px #005bea22; border:1px solid #e3f2fd;">
                        <img src="<?= htmlspecialchars($t['photo']) ?>" alt="<?= htmlspecialchars($t['name']) ?>">
                        <div class="name"><?= htmlspecialchars($t['name']) ?></div>
                        <div class="review" style="font-style:italic; color:#222;"><?= htmlspecialchars($t['review']) ?></div>
                        <div style="margin-top:10px;">
                            <span style="color:#ffb400; font-size:1.2em;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Promo & Penawaran -->
        <section style="margin-top:50px;">
            <div class="section-title" style="text-align:center;">Promo & Penawaran Spesial</div>
            <div class="promos" style="justify-content:center;">
                <?php foreach ($promos as $p): ?>
                    <div class="promo-card" style="box-shadow:0 4px 16px #005bea22; border:1px solid #e3f2fd;">
                        <strong><?= htmlspecialchars($p['title']) ?></strong>
                        <div><?= htmlspecialchars($p['desc']) ?></div>
                        <a href="promo.php" style="margin-top:12px; color:#005bea; font-weight:bold; text-decoration:underline; font-size:0.98em;">Lihat Detail Promo</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <!-- awal footer -->
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
    <!-- akhir footer -->
</body>

</html>