<?php
$servername = "localhost"; // Nama server database, umumnya "localhost"
$username = "xirpl2-27"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "db_xirpl2-27_1"; // Ganti dengan nama database yang berisi tabel 'buku'

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil!";
?>
