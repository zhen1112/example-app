<?php
session_start();

// Periksa apakah pengguna sudah login
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Periksa apakah parameter idcars sudah disertakan dalam URL
    if(isset($_GET['id'])){
        // Ambil nilai idcars dari URL
        $idcars = $_GET['id'];
        // Sambungkan ke database
        include_once "koneksi.php";

        // Query untuk menghapus data mobil berdasarkan idcars
        $query = "DELETE FROM tb_cars WHERE idcars = $idcars";

        // Eksekusi query
        if ($conn->query($query) === TRUE) {
            echo "Data mobil berhasil dihapus.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        // Tutup koneksi database
        $conn->close();

        // Redirect ke halaman lain setelah menghapus data
        header("Location: /watchs");
        exit;
    } else {
        echo "Parameter idcars tidak ditemukan dalam URL.";
        exit;
    }
} else {
    // Jika pengguna belum login, alihkan ke halaman login
    header("Location: /login");
    exit;
}
?>
