<?php
$db = mysqli_connect('localhost', 'root', '', 'driftora');

function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function create_mobil($data)
{
    global $db;
    $Merek = $data['merek'];
    $Jenis = $data['jenis'];
    $Tahun = $data['tahun'];
    $Harga = $data['harga'];
    $Foto = upload_file();
    $query = "INSERT INTO datamobil VALUES (null, '$Merek', '$Jenis', '$Tahun', '$Harga', '$Foto')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi untuk ubah mobil
function ubah_mobil($data)
{
    global $db;
    $id = $data['id'];
    $merek = $data['merek'];
    $jenis = $data['jenis'];
    $tahun = $data['tahun'];
    $harga = $data['harga'];  
    $query = "UPDATE datamobil SET merek= '$merek', jenis= '$jenis', tahun = '$tahun', harga = '$harga' WHERE id = '$id' ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi untuk upload gambar menu
function upload_file() {
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if ($error === 4) {
        return 'default.jpg'; // jika tidak ada gambar, gunakan gambar default
    }

    // cek apakah yang diupload adalah gambar
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
   $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
   $ekstensiGambar = strtolower($ekstensiGambar);


    
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang anda upload bukan gambar!');</script>";
        return false;
    }

    // cek jika ukuran file terlalu besar
    if ($ukuranFile > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // generate nama file baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}
// fungsi untuk hapus mobil
function hapus_mobil($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM datamobil WHERE id = '$id'");
    return mysqli_affected_rows($db);
}

// fungsi untuk ubah pembeli
function ubah_pembeli($data)
{
    global $db;
    $id = $data['id'];
    $nama = $data['nama'];
    $kontak = $data['kontak'];
    $alamat = $data['alamat'];
    $registrasi = $data['registrasi'];
    $query = "UPDATE pembeli SET nama= '$nama', kontak= '$kontak', alamat = '$alamat', registrasi = '$registrasi' WHERE id = '$id' ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi untuk hapus pembeli
function hapus_pembeli($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM pembeli WHERE id = '$id'");
    return mysqli_affected_rows($db);
}

// fungsi untuk ubah setting
function ubah_setting($data){
    global $db;
    $id = $data['id'];
    $nama = $data['nama'];
    $email = $data['email'];
    $password = $data['password'];
    $query = "UPDATE pendaftaran SET nama= '$nama', email= '$email', password = '$password' WHERE id = '$id' ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi untuk hapus setting
function hapus_setting($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM pendaftaran WHERE id = '$id'");
    return mysqli_affected_rows($db);
}