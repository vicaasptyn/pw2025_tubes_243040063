<?php
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
        'name' => 'Dennis S ',
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
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0; padding: 0;
            background: linear-gradient(120deg,rgb(255, 255, 255) 0%,rgb(255, 255, 255) 100%);
        }
        nav {
            background: #fff;
            box-shadow: 0 2px 8px #0001;
            padding: 0;
        }
        .navbar-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
        }
        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
            color: #005bea;
            letter-spacing: 1px;
        }
        .navbar-menu {
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }
        .navbar-menu li a {
            text-decoration: none;
            color: #005bea;
            font-weight: 500;
            transition: color 0.2s;
            padding: 6px 12px;
            border-radius: 4px;
        }
        .navbar-menu li a:hover, .navbar-menu li a.active {
            background: #005bea;
            color: #fff;
        }
        .banner {
            background-image: url('../img/banner.jpeg');
            background-size: cover;
            background-size: cover;
            object-fit: cover;
            color: #fff;
            padding: 70px 20px 60px 20px;
            text-align: center;
            position: relative;
        }
        .banner h1 {
            margin-bottom: 15px;
            font-size: 2.5em;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .banner p {
            margin-bottom: 30px;
            font-size: 1.2em;
        }
        .banner a {
            background: #fff;
            padding: 12px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
            box-shadow: 0 2px 8px #005bea33;
            transition: background 0.2s, color 0.2s;
        }
        .banner a:hover {
            background: #005bea;
            color: #fff;
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .section-title {
            font-size: 1.7em;
            margin-bottom: 18px;
            color: #005bea;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .cars, .testimonials, .promos {
            display: flex;
            gap: 24px;
            justify-content: flex-start;
        }
        .car-card, .testimonial-card, .promo-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px #005bea11;
            padding: 18px;
            transition: transform 0.15s, box-shadow 0.15s;
        }
        .car-card {
            width: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .car-card img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 8px #005bea22;
        }
        .car-card h3 {
            margin: 14px 0 6px;
            font-size: 1.2em;
            font-weight: 700;
        }
        .car-card .price {
            color: #009900;
            font-weight: bold;
            font-size: 1.1em;
        }
        .car-card .promo {
            background: linear-gradient(90deg, #ffeb3b 60%, #fffde4 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 0.98em;
            margin-top: 8px;
            font-weight: 500;
        }
        .car-card:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 6px 24px #005bea33;
        }
        .search-filter {
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            margin-bottom: 36px;
            box-shadow: 0 2px 12px #005bea11;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
        }
        .search-filter input,
        .search-filter select {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #b3c6e0;
            font-size: 1em;
            margin-right: 8px;
        }
        .search-filter button {
            background: #005bea;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .search-filter button:hover {
            background: #003e8a;
        }
        .testimonial-card {
            width: 260px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .testimonial-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 2px 8px #005bea22;
        }
        .testimonial-card .name {
            font-weight: bold;
            margin-top: 12px;
            color: #005bea;
        }
        .testimonial-card .review {
            margin-top: 8px;
            font-size: 1em;
            color: #444;
        }
        .promo-card {
            background: linear-gradient(120deg, #e3f2fd 60%, #fff 100%);
            width: 320px;
            min-height: 90px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border-left: 6px solid #005bea;
        }
        .promo-card strong {
            font-size: 1.1em;
            color: #005bea;
            margin-bottom: 6px;
        }
        @media (max-width: 900px) {
            .cars, .testimonials, .promos {
                flex-direction: column;
                align-items: center;
            }
            .car-card, .testimonial-card, .promo-card {
                width: 100%;
                min-width: 0;
            }
            .navbar-container {
                flex-direction: column;
                gap: 10px;
            }
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
            <li><a href="home.php" class="active">Beranda</a></li>
            <li><a href="daftar_mobil.php">Mobil Unggulan</a></li>
            <li><a href="promo.php">Testimoni Pelanggan</a></li>
            <li><a href="tentang.php">Promo & Penawaran</a></li>
            <li><a href="kontak.php">Kontak</a></li>
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
    <!-- Pencarian & Filter -->
    <form class="search-filter" method="GET" action="">
        <input type="text" name="q" placeholder="Cari mobil (misal: Toyota, Hyundai)">
        <select name="tipe">
            <option value="">Tipe Mobil</option>
            <option value="supercar">SuperCar</option>
            <option value="suv">SUV</option>
            <option value="hatchback">Hatchback</option>
        </select>
        <select name="harga">
            <option value="">Harga</option>
            <option value="1">&lt; Rp 255jt</option>
            <option value="2">Rp 300jt - Rp 750jt</option>
            <option value="3">&gt; Rp 750jt - 2,1 M</option>
        </select>
        <button type="submit">Cari</button>
    </form>

    <!-- Daftar Mobil Unggulan -->
    <section id="cars">
        <div class="section-title">Mobil Unggulan</div>
        <div class="cars">
            <?php foreach($featuredCars as $car): ?>
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
            <?php foreach($testimonials as $t): ?>
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
            <?php foreach($promos as $p): ?>
                <div class="promo-card" style="box-shadow:0 4px 16px #005bea22; border:1px solid #e3f2fd;">
                    <strong><?= htmlspecialchars($p['title']) ?></strong>
                    <div><?= htmlspecialchars($p['desc']) ?></div>
                    <a href="promo.php" style="margin-top:12px; color:#005bea; font-weight:bold; text-decoration:underline; font-size:0.98em;">Lihat Detail Promo</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
</body>
</html>