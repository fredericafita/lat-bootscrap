<?php
$host = "localhost";
$user = "root";      // sesuaikan dengan username MySQL kamu
$pass = "";          // sesuaikan juga jika ada password
$db   = "web final";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
