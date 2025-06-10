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
    <title>Login admin</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
</head>
<style>
    body {
        background-image: url('../../img/bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 100vh;
    }

    .card {
        background-color: rgba(246, 244, 239, 0.9);
        box-shadow: 0 0 20px rgba(88, 114, 82, 0.3);
    }

    .card:hover {
        box-shadow: 0 0 0 7px rgba(153, 255, 130, 0.9);
    }

    .logo {
        display: block;
        margin: 0 auto 1rem;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 1px 1px 12px rgba(88, 114, 82, 0.9);
    }
</style>

<body class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

    <div class="card p-4 shadow" style="width: 500px;" data-aos="zoom-in">
        <h3 class="mb-4 text-center">Tambah Mobil</h3>
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
                <input id="foto" name="foto" required type="file" class="form-control" accept="image/*" onchange="priviewImage(event)" />
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
        <div class="pendaftarn text-center">
            <p>Sudah punya akun?
                <a href="index.php">Login</a>
            </p>
        </div>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>