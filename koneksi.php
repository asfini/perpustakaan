<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbperpus";

$koneksi = mysqli_connect($server, $user, $password, $database);
if (mysqli_error($koneksi)) {
    echo "database tidak terhubung";
}
