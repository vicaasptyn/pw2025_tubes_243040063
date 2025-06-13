<?php include 'database.php' ?>
<?php
if (isset($_POST['mobil'])) {
    if (create_mobil($_POST) > 0) {
        echo "<script>alert('data mobil berhasil ditambahkan.'); </script>";
    } else {
        echo "<script>alert('data mobil gagal ditambahkan.'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
</head>
<style>
    body {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 100vh;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.95);
        box-shadow: 0 0 20px rgba(33, 147, 176, 0.3);
        border: 2px solid #2193b0;
        border-radius: 18px;
    }

    .card:hover {
        box-shadow: 0 0 0 7px rgba(33, 147, 176, 0.15);
        border-color: #6dd5ed;
    }

    .logo {
        display: block;
        margin: 0 auto 1rem;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 1px 1px 12px rgba(33, 147, 176, 0.5);
        border: 3px solid #2193b0;
    }

    .form-label {
        color: #2193b0;
        font-weight: 600;
    }

    .form-control:focus {
        border-color: #2193b0;
        box-shadow: 0 0 0 2px #6dd5ed55;
    }

    .btn-success {
        background: linear-gradient(90deg, #2193b0 0%, #6dd5ed 100%);
        border: none;
        color: #fff;
        font-weight: bold;
        transition: background 0.3s;
    }

    .btn-success:hover {
        background: linear-gradient(90deg, #6dd5ed 0%, #2193b0 100%);
        color: #fff;
    }

    .pendaftarn a {
        color: #2193b0;
        text-decoration: underline;
        font-weight: 600;
    }

    .pendaftarn a:hover {
        color: #17627a;
    }
</style>

<body class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

    <div class="card p-4 shadow" style="width: 500px;" data-aos="zoom-in">
        <h3 class="mb-4 text-center" style="color:#2193b0;">Tambah Mobil</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="merek" class="form-label">Merek</label>
                <input id="merek" name="merek" required type="text" class="form-control" placeholder="Masukkan merk mobil" />
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <textarea id="jenis" name="jenis" required class="form-control" rows="2" placeholder="Jenis mobil"></textarea>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input id="tahun" name="tahun" required type="number" min="0" class="form-control" placeholder="Masukkan tahun" />
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input id="harga" name="harga" required type="text" class="form-control" placeholder="Masukkan harga" />
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input id="foto" name="foto" required type="file" class="form-control" accept="image/*" />
            </div>
            <div class="mb-3">
                <label for="status_ketersediaan" class="form-label">Status Ketersediaan</label>
                <select id="status_ketersediaan" name="status_ketersediaan" required class="form-control">
                    <option value="">Pilih status</option>
                    <option value="Tersedia">Available</option>
                    <option value="Habis">Not Available</option>
                </select>
            </div>
            <button class="btn btn-success w-100" type="submit" name="mobil">Submit</button>
        </form>
        <hr>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>