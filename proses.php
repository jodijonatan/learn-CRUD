<?php

require_once "connection.php";

$connection = connection();

$sukses_tambah = "";
$error_tambah = "";

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    if($nama && $kelas && $jurusan) {
        $cread = "insert into siswa (nama, kelas, jurusan) values ('$nama', '$kelas', '$jurusan')";
        mysqli_query($connection, $cread);

        $sukses_tambah = "Data berhasil terkirim";
    } else {
        $error_tambah = "Isi data nya lah boy";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    <?php if($sukses_tambah) { ?>
        <h4>Data berhasil terkirim</h4> 
    <?php } ?>

    <?php if($error_tambah) { ?>
        <h4>Isi data yang tepat</h4> 
    <?php } ?>
    <button><a href="siswa.php">Back to form</a></button>
</body>
</html>

<?php
mysqli_close($connection); 
?>