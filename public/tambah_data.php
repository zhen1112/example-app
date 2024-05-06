<?php
session_start();

// Pastikan pengguna sudah login
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: /login");
    exit;
}

include_once "koneksi.php";

// Ambil nilai input dari form
$merk = $_POST["merk"];
$model = $_POST["model"];
$nomor_plat = $_POST["nomor_plat"];
$tarif = $_POST["tarif"];
$id_users = $_SESSION["id"]; // Ambil ID pengguna dari sesi

// Untuk unggahan gambar
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];
$folder = "images/";

// Pindahkan file ke folder 'images' jika unggahan berhasil
if (move_uploaded_file($gambar_tmp, $folder.$gambar)) {
    // Query untuk menambahkan data baru ke dalam tabel tb_cars
    $query = "INSERT INTO tb_cars (id_users, merk, model, nomor_plat, tarif, gambar) 
              VALUES ('$id_users', '$merk', '$model', '$nomor_plat', '$tarif', '$gambar')";

    if ($conn->query($query) === TRUE) {
        header("Location: /profile");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Maaf, terjadi kesalahan saat mengunggah gambar.";
}

// Tutup koneksi database
$conn->close();
?>
