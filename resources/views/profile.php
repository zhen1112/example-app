<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        $id_pengguna = $_SESSION["id"]; // Ambil ID pengguna dari sesi
    } else {
        // Jika pengguna belum login, tampilkan tautan login
        echo '<li><a href="/login">Login/SignUp</a></li>';
    }
    include_once "koneksi.php";
    $query = "SELECT * FROM tb_cars WHERE id_users = $id_pengguna";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // Loop melalui hasil dan tampilkan data
      while ($row = $result->fetch_assoc()) {
         $idcars = $row["idcars"];
         $merk = $row["merk"];
         $model = $row["model"];
         $plat = $row["nomor_plat"];
         $tarif = $row["tarif"];
         $gambar = $row["gambar"];
      }
  } 

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Transindo Luxury Rent Car</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="/"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="/profil">My Cars</a>
                        </li>
                        <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        // Jika pengguna sudah login, tampilkan nama pengguna
        echo '<li><a href="/logout">LOGOUT</a></li>';
    } else {
        // Jika pengguna belum login, tampilkan tautan login
        echo '<li><a href="/login">Login/SignUp</a></li>';
    }
    ?>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="prof.php">My Cars</a></li>
                     <li><a href="/myrent">My Rent</a></li>
                     <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        // Jika pengguna sudah login, tampilkan nama pengguna
        echo '<li><a href="/logout">LOGOUT</a></li>';
    } else {
        // Jika pengguna belum login, tampilkan tautan login
        echo '<li><a href="/login">Login/SignUp</a></li>';
    }
    ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- background bg start -->
      <?php if ($result->num_rows > 0): ?>
         <div class="background_bg">
            <div class="watchs_section layout_padding">
               <div class="container">
                  <div class="watchs_section_2">
                     <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/<?php echo $row['gambar']; ?>"></div>
                           </div>
                           <div class="col-md-6">
                              <h4 class="uni_text"><?php echo $row['model']; ?></h4>
                              <p class="watchs_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error delectus suscipit libero, incidunt officiis eius vel temporibus expedita nihil, sed voluptas dignissimos a quos rem!</p>
                              <h4 class="rate_text"><span style="color: #b60213;">IDR</span><?php echo $row['tarif']; ?></h4>
                              <div class="read_bt1"><a href="rent.php?idcars=<?php echo $row['idcars']; ?>">Rent Now</a></div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  </div>
                  <?php
    include_once "koneksi.php";
    $query = "SELECT * FROM tb_cars WHERE id_users = $id_pengguna";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // Loop melalui hasil dan tampilkan data
      while ($row = $result->fetch_assoc()) {
         $idcars = $row["idcars"];
         $_SESSION['idcars'] = $idcars;
         $merk = $row["merk"];
         $model = $row["model"];
         $plat = $row["nomor_plat"];
         $tarif = $row["tarif"];
         $gambar = $row["gambar"];
         $keterangan = $row["keterangan"];
         $_SESSION['idcars'] = $idcars;
?>
      <div class="background_bg">
        <!-- watchs section start -->
         <div class="watchs_section layout_padding">
            <div class="container">
               
               <div class="watchs_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="image_1"><img src="images/<?=$gambar;?>"></div>
                     </div>
                     <div class="col-md-6">
                        <h4 class="uni_text"><?= $model;?></h4>
                        <p class="watchs_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error delectus suscipit libero, incidunt officiis eius vel temporibus expedita nihil, sed voluptas dignissimos a quos rem!</p>
                        <h4 class="rate_text"><span style="color: #b60213;">IDR</span><?= $tarif;?></h4>
                        <div class="read_bt1"><a href="rent.php?idcars=<?=$idcars; ?>">Rent Now</a></div>
                        <div class="read_bt1"><a href="#"><?= $keterangan; if($keterangan == NULL){ echo "FREE";}?></a></div>
                        <div class="read_bt1"><a href="delete.php?id=<?= $idcars;?>">Hapus Mobil</a></div>
                     </div>
                  </div>
<?php
}
    }
?>
               </div>
               </div>
            </div>
         </div>
      <?php else: ?>
         <!-- Tampilan jika tidak ada mobil untuk disewakan -->
         <div class="background_bg">
            <div class="container">
            <h2 style="color: blue; margin-left: 200px;">Tidak ada mobil yang tersedia untuk disewakan saat ini.</h2>

            </div>
         </div>
      <?php endif; ?>
               <div class="seemore_bt"><a href="input.php">Sewakan Mobil</a></div>
            </div>
         </div>
         <!-- watchs section end -->
      </div>
      <!-- background bg end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <h3 class="follow_text">Follow Now</h3>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  <li><a href="#"><img src="images/youtub-icon.png"></a></li>
               </ul>
            </div>
            <div class="location_main">
               <div class="location_left">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="call_padding">Kabupaten Serang</span></a></div>
               </div>
               <div class="location_middle">
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="call_padding">fahmiamirudin669@gmail.com</span></a></div>
               </div>
               <div class="location_right">
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_padding">Call +62 8881167540</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved.<a href="#"></a> Create with love by <a href="https://themewagon.com">Mochammad Fahmi A</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>