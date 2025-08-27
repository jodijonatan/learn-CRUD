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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    
</body>
</html>