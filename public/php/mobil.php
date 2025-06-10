<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Dealer Mobil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mobil.css">
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
            </ul>
        </div>
    </nav>
    <div style="max-width:1100px;margin:40px auto 0;padding:0 20px;">
        <h2>Daftar Mobil</h2>
        <form method="get" style="margin-bottom:30px;display:flex;gap:15px;flex-wrap:wrap;">
            <input type="text" name="q" placeholder="Cari nama mobil..." value="<?= htmlspecialchars($_GET['q'] ?? '') ?>" style="padding:8px 12px;border:1px solid #ccc;border-radius:4px;">
            <select name="kategori" style="padding:8px 12px;border:1px solid #ccc;border-radius:4px;">
                <option value="">Semua Kategori</option>
                <option value="SUV" <?= (($_GET['kategori'] ?? '') == 'SUV') ? 'selected' : ''; ?>>SUV</option>
                <option value="Sedan" <?= (($_GET['kategori'] ?? '') == 'Sedan') ? 'selected' : ''; ?>>Sedan</option>
                <option value="Hatchback" <?= (($_GET['kategori'] ?? '') == 'Hatchback') ? 'selected' : ''; ?>>Hatchback</option>
                <option value="MPV" <?= (($_GET['kategori'] ?? '') == 'MPV') ? 'selected' : ''; ?>>MPV</option>
            </select>
            <button type="submit" style="background:#005bea;color:#fff;border:none;padding:8px 18px;border-radius:4px;cursor:pointer;">Filter</button>
        </form>
        <?php
        // Contoh data mobil
        $mobil = [
            [
                'nama' => 'Toyota Avanza',
                'kategori' => 'MPV',
                'harga' => 230000000,
                'gambar' => '../img/avanza.jpg',
                'deskripsi' => 'MPV keluarga yang irit dan nyaman, cocok untuk perjalanan jauh.'
            ],
            [
                'nama' => 'Honda HR-V',
                'kategori' => 'SUV',
                'harga' => 375000000,
                'gambar' => '../img/hrv.jpg',
                'deskripsi' => 'SUV stylish dengan fitur modern dan performa tangguh.'
            ],
            [
                'nama' => 'Suzuki Swift',
                'kategori' => 'Hatchback',
                'harga' => 210000000,
                'gambar' => '../img/swift.jpg',
                'deskripsi' => 'Hatchback kompak, lincah di perkotaan dan hemat bahan bakar.'
            ],
            [
                'nama' => 'Toyota Camry',
                'kategori' => 'Sedan',
                'harga' => 650000000,
                'gambar' => '../img/camry.jpg',
                'deskripsi' => 'Sedan premium dengan kenyamanan dan kemewahan kelas atas.'
            ],
            [
                'nama' => 'Mitsubishi Xpander',
                'kategori' => 'MPV',
                'harga' => 270000000,
                'gambar' => '../img/xpander.jpg',
                'deskripsi' => 'MPV modern dengan kabin luas dan fitur keselamatan lengkap.'
            ],
            [
                'nama' => 'Daihatsu Terios',
                'kategori' => 'SUV',
                'harga' => 250000000,
                'gambar' => '../img/terios.jpg',
                'deskripsi' => 'SUV tangguh, cocok untuk petualangan keluarga di segala medan.'
            ],
            [
                'nama' => 'Honda Brio',
                'kategori' => 'Hatchback',
                'harga' => 180000000,
                'gambar' => '../img/brio.jpg',
                'deskripsi' => 'Hatchback mungil, irit bahan bakar dan mudah diparkir.'
            ],
            [
                'nama' => 'Hyundai Ioniq 5',
                'kategori' => 'SUV',
                'harga' => 800000000,
                'gambar' => '../img/ioniq5.jpg',
                'deskripsi' => 'SUV listrik futuristik dengan teknologi canggih dan ramah lingkungan.'
            ],
            [
                'nama' => 'Toyota Yaris',
                'kategori' => 'Hatchback',
                'harga' => 270000000,
                'gambar' => '../img/yaris.jpg',
                'deskripsi' => 'Hatchback stylish, cocok untuk anak muda dan keluarga kecil.'
            ],
            [
                'nama' => 'Honda Civic',
                'kategori' => 'Sedan',
                'harga' => 550000000,
                'gambar' => '../img/civic.jpg',
                'deskripsi' => 'Sedan sporty dengan performa responsif dan desain elegan.'
            ],
            [
                'nama' => 'Suzuki Ertiga',
                'kategori' => 'MPV',
                'harga' => 220000000,
                'gambar' => '../img/ertiga.jpg',
                'deskripsi' => 'MPV ekonomis, nyaman untuk keluarga dan irit perawatan.'
            ],
            [
                'nama' => 'Mazda CX-5',
                'kategori' => 'SUV',
                'harga' => 550000000,
                'gambar' => '../img/mazdacx5.jpg',
                'deskripsi' => 'SUV premium dengan desain elegan dan fitur keselamatan mutakhir.'
            ],
            [
                'nama' => 'Nissan Livina',
                'kategori' => 'MPV',
                'harga' => 240000000,
                'gambar' => '../img/livina.jpg',
                'deskripsi' => 'MPV nyaman dengan kabin luas dan konsumsi bahan bakar efisien.'
            ],
            [
                'nama' => 'Wuling Almaz',
                'kategori' => 'SUV',
                'harga' => 320000000,
                'gambar' => '../img/almaz.jpg',
                'deskripsi' => 'SUV modern dengan fitur voice command dan panoramic sunroof.'
            ],
            [
                'nama' => 'Daihatsu Sigra',
                'kategori' => 'MPV',
                'harga' => 150000000,
                'gambar' => '../img/sigra.jpg',
                'deskripsi' => 'MPV murah meriah, cocok untuk keluarga muda.'
            ],
            [
                'nama' => 'Toyota Fortuner',
                'kategori' => 'SUV',
                'harga' => 550000000,
                'gambar' => '../img/fortuner.jpg',
                'deskripsi' => 'SUV besar dengan performa tangguh dan tampilan gagah.'
            ],
            [
                'nama' => 'Honda Jazz',
                'kategori' => 'Hatchback',
                'harga' => 250000000,
                'gambar' => '../img/jazz.jpg',
                'deskripsi' => 'Hatchback favorit anak muda, lincah dan stylish.'
            ],
            [
                'nama' => 'Toyota Vios',
                'kategori' => 'Sedan',
                'harga' => 320000000,
                'gambar' => '../img/vios.jpg',
                'deskripsi' => 'Sedan ekonomis, nyaman untuk perjalanan harian.'
            ],
            [
                'nama' => 'Mitsubishi Pajero Sport',
                'kategori' => 'SUV',
                'harga' => 600000000,
                'gambar' => '../img/pajero.jpg',
                'deskripsi' => 'SUV premium dengan performa offroad dan kenyamanan maksimal.'
            ],
            [
                'nama' => 'Suzuki Baleno',
                'kategori' => 'Hatchback',
                'harga' => 230000000,
                'gambar' => '../img/baleno.jpg',
                'deskripsi' => 'Hatchback modern dengan fitur lengkap dan desain elegan.'
            ],
            [
                'nama' => 'Honda Accord',
                'kategori' => 'Sedan',
                'harga' => 720000000,
                'gambar' => '../img/accord.jpg',
                'deskripsi' => 'Sedan mewah dengan teknologi canggih dan kenyamanan tinggi.'
            ],
            [
                'nama' => 'Toyota Sienta',
                'kategori' => 'MPV',
                'harga' => 300000000,
                'gambar' => '../img/sienta.jpg',
                'deskripsi' => 'MPV unik dengan pintu geser dan kabin fleksibel.'
            ],
            [
                'nama' => 'Hyundai Stargazer',
                'kategori' => 'MPV',
                'harga' => 250000000,
                'gambar' => '../img/stargazer.jpg',
                'deskripsi' => 'MPV terbaru dengan fitur kekinian dan desain futuristik.'
            ],
            [
                'nama' => 'Mazda 2',
                'kategori' => 'Hatchback',
                'harga' => 280000000,
                'gambar' => '../img/mazda2.jpg',
                'deskripsi' => 'Hatchback premium dengan handling mantap dan interior mewah.'
            ],
        ];

        // Filter pencarian
        $q = strtolower(trim($_GET['q'] ?? ''));
        $kategori = $_GET['kategori'] ?? '';

        $filtered = array_filter($mobil, function ($m) use ($q, $kategori) {
            $match = true;
            if ($q) {
                $match = $match && (strpos(strtolower($m['nama']), $q) !== false);
            }
            if ($kategori) {
                $match = $match && ($m['kategori'] === $kategori);
            }
            return $match;
        });

        if (empty($filtered)) {
            echo "<p>Tidak ada mobil yang ditemukan.</p>";
        } else {
            echo '<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:28px;">';
            foreach ($filtered as $m) {
                echo '<div style="border:1px solid #eee;border-radius:8px;overflow:hidden;background:#fafbfc;box-shadow:0 2px 8px #0001;">';
                echo '<img src="' . htmlspecialchars($m['gambar']) . '" alt="' . htmlspecialchars($m['nama']) . '" style="width:100%;height:160px;object-fit:cover;">';
                echo '<div style="padding:16px;">';
                echo '<h3 style="margin:0 0 8px 0;font-size:1.15em;color:#005bea;">' . htmlspecialchars($m['nama']) . '</h3>';
                echo '<span style="display:inline-block;background:#e3f0ff;color:#005bea;padding:2px 10px;border-radius:12px;font-size:0.9em;margin-bottom:8px;">' . htmlspecialchars($m['kategori']) . '</span>';
                echo '<div style="font-weight:bold;color:#222;margin:8px 0 6px 0;">Rp ' . number_format($m['harga'], 0, ',', '.') . '</div>';
                echo '<p style="margin:0;color:#444;font-size:0.97em;">' . htmlspecialchars($m['deskripsi']) . '</p>';
                echo '</div></div>';
            }
            echo '</div>';
        }
        ?>
    </div>

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