<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Perpustakaan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .add-link {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #555;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .no-data {
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Daftar Buku Perpustakaan</h1>
    <a href="tambah_buku.html" class="add-link">Tambah Buku Baru</a>

    <?php
    // Memanggil file koneksi untuk terhubung ke database
    include 'koneksi.php';

    // Menyiapkan query untuk mengambil semua data dari tabel 'buku'
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);

    // Cek apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
        // Menampilkan data dalam tabel HTML
        echo "<table>";
        echo "<tr><th>ID Buku</th><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th><th>Stok</th><th>Kategori</th></tr>";
        
        // Loop untuk mengambil setiap baris data dari hasil query
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id_buku"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["judul"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["pengarang"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["tahun_terbit"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["stok"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["kategori"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='no-data'>Tidak ada data buku yang ditemukan.</p>";
    }

    // Menutup koneksi database
    $conn->close();
    ?>
</div>

</body>
</html>