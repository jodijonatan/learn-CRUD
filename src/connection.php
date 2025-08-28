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