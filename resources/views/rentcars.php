<?php
session_start();

// Periksa apakah pengguna sudah login
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Periksa apakah parameter idcars sudah disertakan dalam URL
    if(isset($_SESSION['id'])){
        // Ambil nilai idcars dari URL
        $idcars = $_GET['idcars'];
        // Sambungkan ke database
        include_once "koneksi.php";

        // Query untuk mengambil data mobil berdasarkan idcars
        $query = "SELECT * FROM tb_cars WHERE idcars = $idcars";

        // Eksekusi query
        $result = $conn->query($query);

        // Periksa apakah query berhasil dieksekusi
        if (!$result) {
            echo "Error executing query: " . $conn->error;
            exit;
        }

        // Periksa apakah ada baris yang ditemukan
        if ($result->num_rows > 0) {
            // Ambil data dari hasil query
            $row = $result->fetch_assoc();
            $merk = $row["merk"];
            $model = $row["model"];
            $nomor_plat = $row["nomor_plat"];
            $tarif = $row["tarif"];
            $gambar = $row["gambar"];
            $_SESSION['idcars'] = $row['idcars'];
            $_SESSION['merk'] = $row['merk'];

            // Query untuk mendapatkan tanggal terakhir dari tb_pesan sesuai dengan idcars
            $query_pesan = "SELECT MAX(tanggal_selesai) AS max_tanggal FROM tb_pesan WHERE idcars = $idcars";
            $result_pesan = $conn->query($query_pesan);

            if ($result_pesan->num_rows > 0) {
                $row_pesan = $result_pesan->fetch_assoc();
                $tanggal_terakhir = $row_pesan["max_tanggal"];
            } else {
                $tanggal_terakhir = null;
            }
        } else {
            echo "No car found with the provided id.";
            exit;
        }
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cekout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Rental</title>
    <script>
        function setMinDate() {
            var tanggal_terakhir = "<?php echo $tanggal_terakhir; ?>";
            if (tanggal_terakhir !== null) {
                document.getElementById("tanggal_pesan").setAttribute("min", tanggal_terakhir);
            }
        }
    </script>
     <script>
        function setMinMaxDate() {
            var tanggal_terakhir = "<?php echo $tanggal_terakhir; ?>";
            if (tanggal_terakhir !== null) {
                document.getElementById("tanggal_selesai").setAttribute("min", tanggal_terakhir);
            }
        }
    </script>
    
</head>
<body onload="setMinDate(); setMinMaxDate()">


<div class="product-container">
    <div class="image">
        <img src="images/<?=$gambar;?>" alt="International-Women-s-Day-Facebook-Post" border="0" />
    </div>
    <div class="details">
        <h1 class="cost">IDR<?= $tarif;?>/Day</h1>
        <h3 class="title"><?= $model . " " . $merk;?></h3>
    </div>
</div>
<form action="pesan.php" method="POST">
<div class="card-container">
        <div class="mastercard">
            <div class="logo"></div>
            <div class="name"></div>
        </div>
        <div class="card-details">
            <div class="card-number field">
                <label for="tanggal_pesan">Tanggal pesan</label>
                <input id="tanggal_pesan" type="date" name="tanggal_pesan" />
            </div>
            <div class="card-name field">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input id="tanggal_selesai" type="date" name="tanggal_selesai" />
            </div>
            <div class="expires field">
                <label for="no_hp">No Hp Pemesan</label>
                <input id="no_hp" type="text" name="no_hp" />
            </div>
        </div>
    <button class="purchase-button" data-content="PURCHASE" type="submit">Rental!</button>
</div>
</form>
    </div>
</body>
</html>
