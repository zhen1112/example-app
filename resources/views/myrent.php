<!DOCTYPE html>
<html>
<head>
    <title>Data Pemesanan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .update-btn {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
session_start();
include_once "koneksi.php"; // Sertakan file koneksi

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    $name = $_SESSION["name"]; // Ambil nama pengguna dari sesi
    
    // Fungsi untuk update data menjadi "SELESAIkan" pada tb_pesan dan tb_cars
    if(isset($_GET['idpesan'])) {
        $idpesan = $_GET['idpesan'];
        $update_pesan_query = "UPDATE tb_pesan SET keterangan = 'SELESAIkan' WHERE idpesan = ?";
        $stmt_update_pesan = $conn->prepare($update_pesan_query);
        $stmt_update_pesan->bind_param("i", $idpesan);
        
        $update_cars_query = "UPDATE tb_cars SET keterangan = 'selesai' WHERE idcars = (SELECT idcars FROM tb_pesan WHERE idpesan = ?)";
        $stmt_update_cars = $conn->prepare($update_cars_query);
        $stmt_update_cars->bind_param("i", $idpesan);
        
        if($stmt_update_pesan->execute() && $stmt_update_cars->execute()) {
            echo "<p>Data dengan ID Pesan $idpesan berhasil diperbarui menjadi 'SELESAIkan'.</p>";
        } else {
            echo "<p>Gagal memperbarui data.</p>";
        }
        
        $stmt_update_pesan->close();
        $stmt_update_cars->close();
    }
    
    // Kueri SQL untuk mengambil data dari tb_pesan sesuai dengan nama pengguna
    $query = "SELECT p.*, c.*, u.name AS pemilik_mobil 
              FROM tb_pesan p 
              INNER JOIN tb_cars c ON p.idcars = c.idcars 
              INNER JOIN users u ON c.id_users = u.id
              WHERE p.name = ?";
    
    // Persiapkan statement
    $stmt = $conn->prepare($query);
    
    // Bind parameter
    $stmt->bind_param("s", $name);
    
    // Eksekusi statement
    $stmt->execute();
    
    // Ambil hasil query
    $result = $stmt->get_result();
    
    // Variabel untuk menyimpan total harga dari semua pesanan
    $total_harga_semua = 0;
    
    // Periksa apakah ada hasil
    if($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID Pesan</th>";
        echo "<th>ID Pelanggan</th>";
        echo "<th>ID Mobil</th>";
        echo "<th>Nama Pemilik Mobil</th>";
        echo "<th>Nama</th>";
        echo "<th>Tanggal Pesan</th>";
        echo "<th>Tanggal Selesai</th>";
        echo "<th>No HP Pemesan</th>";
        echo "<th>Total Hari</th>";
        echo "<th>Total Harga</th>";
        echo "<th>Keterangan</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        
        // Loop melalui setiap baris hasil
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["idpesan"] . "</td>";
            echo "<td>" . $row["id_pelanggan"] . "</td>";
            echo "<td>" . $row["idcars"] . "</td>";
            echo "<td>" . $row["pemilik_mobil"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["tanggal_pesan"] . "</td>";
            echo "<td>" . $row["tanggal_selesai"] . "</td>";
            echo "<td>" . $row["nohp_pemesan"] . "</td>";
            echo "<td>" . $row["total_hari"] . "</td>";
            echo "<td>" . $row["total_harga"] . "</td>";
            echo "<td>" . $row["keterangan"] . "</td>";
            echo "<td><a class='update-btn' href='?idpesan=" . $row["idpesan"] . "'>SELESAIkan</a></td>";
            echo "</tr>";
            
            // Ambil total harga dari setiap pesanan
            $total_harga_semua += $row["total_harga"];
        }
        
        // Tutup tabel
        echo "</table>";
        
        // Tampilkan total harga semua pemesanan di luar tabel
        echo "<br>";
        echo "Total Harga Semua Pemesanan: " . $total_harga_semua . "<br>";
    } else {
        echo "Tidak ada data ditemukan.";
    }
    
    // Tutup statement
    $stmt->close();
    
} else {
    // Jika pengguna belum login, tampilkan tautan login
    echo '<li><a href="/login">Login/SignUp</a></li>';
}
?>
<a href="/profile">Kembali</a>
</body>
</html>
