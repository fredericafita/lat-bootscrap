<?php
include 'koneksi.php';

// Cek apakah form dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Amankan data input
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  // Pastikan tabel messages ada, jika belum buat otomatis
  $check_table = "SHOW TABLES LIKE 'messages'";
  $result = mysqli_query($conn, $check_table);

  if (mysqli_num_rows($result) == 0) {
    $create_table = "CREATE TABLE messages (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(100) NOT NULL,
      email VARCHAR(100) NOT NULL,
      message TEXT NOT NULL,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $create_table);
  }

  // Simpan pesan ke database
  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Pesan berhasil dikirim! Terima kasih, $name 😊');
            window.location.href = 'index.php';
          </script>";
  } else {
    echo '<script>alert("Terjadi kesalahan saat menyimpan pesan."); window.history.back();</script>';
  }
} else {
  // Jika tidak diakses lewat POST
  echo "<script>
          alert('Akses tidak sah.');
          window.location.href = 'index.php';
        </script>";
}
?>
