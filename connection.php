<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "belajar-crud";

function connection () {
    global $host, $user, $password, $database;
    return mysqli_connect($host, $user, $password, $database);
}