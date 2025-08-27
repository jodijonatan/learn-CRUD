<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "belajar-crud";

$connection = mysqli_connect($host, $user, $password, $database);

// cek koneksi
if (!$connection) {
    die("Gagal koneksi ke database");
}

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

if(isset($_POST['simpan'])) {
    $sql = "insert into siswa (nama, kelas, jurusan) values ('$nama', '$kelas', '$jurusan')";
    mysqli_query($connection, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <!-- masukkan data -->
     <form action="" method="POST">
        <div>
            <label>Nama:
                <input type="text" name="nama" value="<?= $nama ?>">
            </label>
        </div>
        <div>
            <label>Kelas:
                <input type="text" name="kelas" value="<?= $kelas ?>">
            </label>
        </div>
        <div>
            <select name="" id="">
                <option value="">- Pilih Jurusan -</option>
                <option value="Rekayasa Perangkat Lunak" <?php if($jurusan == "Rekayasa Perangkat Lunak") echo "selected" ?>>Rekayasa Perangkat Lunak</option>
                <option value="Teknik Jaringan Akses" <?php if($jurusan == "Teknik Jaringan Akses") echo "selected" ?>>Teknik Jaringan Akses</option>
                <option value="Teknik Komputer Jaringan" <?php if($jurusan == "Teknik Komputer Jaringan") echo "selected" ?>>Teknik Komputer Jaringan</option>
                <option value="Desain Komunikasi Visual" <?php if($jurusan == "Desain Komunikasi Visual") echo "selected" ?>>Desain Komunikasi Visual</option>
            </select>
        </div>
        <div>
            <input type="submit" name="simpan" value="Simpan Data">
        </div>
     </form>
</body>
</html>