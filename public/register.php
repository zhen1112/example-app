<?php
// Pastikan bahwa request datang dari metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include file koneksi ke database
    include_once "koneksi.php";

    // Mendapatkan nilai dari form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash password sebelum disimpan ke database

    // Query untuk menyimpan data pengguna ke dalam tabel users
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    // Persiapan pernyataan SQL
    if ($stmt = $conn->prepare($query)) {
        // Bind variabel ke pernyataan persiapan sebagai parameter
        $stmt->bind_param("sss", $name, $email, $password);

        // Mencoba mengeksekusi pernyataan persiapan
        if ($stmt->execute()) {
            // Redirect pengguna ke halaman sukses setelah pendaftaran berhasil
            header("location: /");
            exit; // Pastikan untuk keluar dari skrip setelah pengalihan header
        } else {
            // Tampilkan pesan kesalahan jika gagal menyimpan data ke database
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Tutup pernyataan
        $stmt->close();
    }

    // Tutup koneksi database
    $conn->close();
}
?>
