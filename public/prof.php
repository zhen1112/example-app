<?php
session_start();
// Cek apakah pengguna sudah login
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Periksa apakah parameter 'id' tersedia dalam sesi
    if(isset($_SESSION['id'])){
        // Jika ya, lanjutkan ke halaman profil
        header("location: /profile");
        exit;
    } else {
        // Jika tidak, berikan pesan bahwa parameter 'id' tidak ditemukan dalam sesi
        echo "Parameter 'id' tidak ditemukan dalam sesi.";
        exit;
    }
} else {
    // Jika pengguna belum login, alihkan ke halaman login
    header("location: /login");
    exit;
}
?>
