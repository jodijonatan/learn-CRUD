<?php

require_once "connection.php";

$connection = connection();

$nama = "";
$kelas = "";
$jurusan = "";

$read = "select nama, kelas, jurusan from siswa";
$result = mysqli_query($connection, $read);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <h3>Tambah siswa SMK Telkom 1 Medan</h3>
    <!-- masukkan data -->
     <form action="proses.php" method="POST">
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
            <select name="jurusan">
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
     <button><a href="/">Back to home page</a></button>

     <h3>Tampilkan siswa SMK Telkom 1 Medan</h3>
     <?php
     echo "<table border='1' cellpadding='5' cellspacing='0'>";
     echo "<tr><th>Nama</th><th>Kelas</th><th>Jurusan</th></tr>";

     while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>" . $row['nama'] . "</td>";
         echo "<td>" . $row['kelas'] . "</td>";
         echo "<td>" . $row['jurusan'] . "</td>";
         echo "</tr>";
     }

     echo "</table>";

     ?>
</body>
</html>

<?php
mysqli_close($connection);
?>