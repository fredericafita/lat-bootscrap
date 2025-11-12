<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT label, nilai FROM data_grafik");
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);
?>
