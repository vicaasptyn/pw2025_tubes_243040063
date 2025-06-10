<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Dealer Mobil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel ="stylesheet" href="../css/beli.css">
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
                <li><a href="mobil.php">Mobil</a></li>
                <li><a href="beli.php" class="active">Beli</a></li>
            </ul>
        </div>
    </nav>

    <!-- form beli -->
    <div class="order-form-container">
        <div class="order-form-header">
            <img src="https://img.icons8.com/color/96/000000/car--v2.png" alt="Mobil" class="order-form-icon">
            <h2 class="order-form-title">Pesan Mobil Impianmu!</h2>
            <p class="order-form-subtitle">Isi data berikut untuk melakukan pemesanan mobil baru dengan mudah dan cepat.</p>
        </div>
        <form action="proses_pemesanan.php" method="post" class="order-form">
            <div class="form-group">
                <label for="merek">Merek Mobil</label>
                <input type="text" id="merek" name="merek" required placeholder="Contoh: Toyota">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Mobil</label>
                <input type="text" id="jenis" name="jenis" required placeholder="Contoh: SUV">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" id="tahun" name="tahun" min="1990" max="2099" required placeholder="Contoh: 2023">
            </div>
            <div class="form-group">
                <label for="harga">Harga (Rp)</label>
                <input type="number" id="harga" name="harga" min="0" required placeholder="Contoh: 250000000">
            </div>
            <button type="submit" class="order-btn">
                <span>🚗</span> Pesan Sekarang
            </button>
        </form>
        <div class="order-form-footer">
            <img src="https://img.icons8.com/fluency/48/000000/discount--v2.png" alt="Promo" class="order-form-promo-icon">
            <span class="order-form-promo-text">Dapatkan promo spesial untuk pembelian bulan ini!</span>
        </div>
    </div>
    <style>
        .order-form-container {
            max-width: 500px;
            margin: 56px auto 32px auto;
            background: linear-gradient(120deg, #e0e7ff 0%, #fff 100%);
            padding: 44px 36px 32px 36px;
            border-radius: 24px;
            box-shadow: 0 8px 36px #005bea22;
            position: relative;
            overflow: hidden;
        }

        .order-form-container::before {
            content: '';
            position: absolute;
            top: -60px;
            left: -60px;
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, #005bea33 60%, transparent 100%);
            z-index: 0;
        }

        .order-form-header {
            text-align: center;
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }

        .order-form-icon {
            width: 60px;
            margin-bottom: 8px;
            filter: drop-shadow(0 2px 8px #005bea33);
        }

        .order-form-title {
            margin: 0;
            color: #005bea;
            font-weight: 900;
            letter-spacing: 1.5px;
            font-size: 2em;
        }

        .order-form-subtitle {
            color: #3a7bd5;
            font-size: 1.05em;
            margin-top: 6px;
            margin-bottom: 0;
            font-weight: 500;
        }

        .order-form {
            position: relative;
            z-index: 1;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2d3a4a;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .form-group input {
            width: 100%;
            padding: 13px 15px;
            border: 1.5px solid #b3c6ff;
            border-radius: 10px;
            font-size: 1em;
            background: #f4f8ff;
            transition: border 0.2s, box-shadow 0.2s;
            outline: none;
        }

        .form-group input:focus {
            border-color: #005bea;
            box-shadow: 0 0 0 2px #005bea33;
        }

        .order-btn {
            background: linear-gradient(90deg, #005bea 60%, #3a7bd5);
            color: #fff;
            border: none;
            padding: 15px 0;
            border-radius: 10px;
            font-size: 1.15em;
            font-weight: 800;
            width: 100%;
            letter-spacing: 1px;
            box-shadow: 0 2px 14px #005bea33;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s, box-shadow 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .order-btn:hover {
            background: linear-gradient(90deg, #3a7bd5 60%, #005bea);
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 6px 24px #005bea33;
        }

        .order-form-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 28px;
            background: #e0e7ff;
            padding: 10px 0;
            border-radius: 10px;
            box-shadow: 0 1px 6px #005bea11;
            position: relative;
            z-index: 1;
        }

        .order-form-promo-icon {
            width: 32px;
        }

        .order-form-promo-text {
            color: #005bea;
            font-weight: 700;
            font-size: 1em;
        }

        @media (max-width: 600px) {
            .order-form-container {
                padding: 24px 8px 18px 8px;
            }

            .order-form-title {
                font-size: 1.3em;
            }

            .order-form-header {
                margin-bottom: 10px;
            }
        }
    </style>
    <!-- akhir form  -->

    <!-- awal footer -->
    <footer style="background: linear-gradient(90deg, #005bea 70%, #00c6fb 100%); color:#fff; padding:40px 0 20px 0; margin-top:70px; box-shadow:0 -2px 24px #005bea33; border-radius:24px 24px 0 0;">
        <div style="max-width:1100px; margin:0 auto; padding:0 20px; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:flex-start; gap:32px;">
            <div style="flex:1; min-width:220px;">
                <div style="font-size:1.5em; font-weight:700; letter-spacing:1px; margin-bottom:10px;">
                    <span style="color:#ffeb3b;">&#128663;</span> Dealer Mobil
                </div>
                <div style="font-size:1em; opacity:0.92;">
                    Jl. Contoh No. 123, Jakarta<br>
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