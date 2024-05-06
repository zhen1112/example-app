<?php
session_start();

// Cek apakah pengguna sudah login, jika ya, alihkan ke halaman beranda
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: /");
    exit;
}

// Cek apakah formulir login telah dikirim
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once "koneksi.php";
    // Validasi input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk mencari user dengan email dan password yang cocok
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    // Jika hasil query mengembalikan baris yang sama dengan 1, artinya pengguna ditemukan
    if ($result->num_rows == 1) {
        // Ambil data pengguna dari hasil query
        $row = $result->fetch_assoc();
        
        // Sesuai, buat sesi dan alihkan ke halaman selamat datang
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id']; // Simpan ID pengguna dalam sesi
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name']; // Simpan nama pengguna dalam sesi
        
        header("location: /"); // Alihkan ke halaman beranda
        exit;
    } else {
        // Jika tidak, arahkan kembali ke halaman login dengan pesan error
        echo "<script>alert('Email atau password salah');</script>";
    }
    $conn->close();
}
?>
