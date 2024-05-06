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
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="watchs.html">Cars</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#testimonial.html">Testimonial</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Login/SignUp</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index.html">Home</a></li>
                     <li><a href="/watchs">Cars</a></li>
                     <?php
    session_start();
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
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Sedan</h1>
                        <p class="banner_text">There are many variations of cars we can rent</p>
                        <div class="read_bt"><a href="/watchs">Rent Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">SUV</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        <div class="read_bt"><a href="/watchs">Rent Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Minivan</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        <div class="read_bt"><a href="/watchs">Rent Now</a></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-plus" style="font-size:24px; color: #fff;"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-minus" style="font-size:24px;  color: #fff;"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- background bg start -->
      <div class="background_bg">
         <!-- watchs section start -->
         <div class="watchs_section layout_padding">
            <div class="container">
               <h1 class="watchs_taital">01<br>Our Sedan</h1>
               <div class="watchs_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="image_1"><img src="images/img-1.png"></div>
                     </div>
                     <div class="col-md-6">
                        <h4 class="uni_text">BMW</h4>
                        <p class="watchs_text">BMW, sebuah merek mobil Jerman yang terkenal, menyediakan sejumlah sedan mewah yang sangat dihargai dalam segmen pasar. Salah satu model sedan terkemuka mereka adalah BMW Seri 3. Seri 3 secara konsisten diakui karena kombinasi kinerja tinggi, desain elegan, dan teknologi inovatif yang diterapkan di setiap generasinya. Mobil sedan BMW ini sering dipilih oleh pengemudi yang menghargai kombinasi antara kenyamanan, gaya hidup, dan pengalaman mengemudi yang dinamis</p>
                        <h4 class="rate_text"><span style="color: #b60213;">IDR</span>5.000.000/Day</h4>
                        <div class="read_bt1"><a href="/watchs">Rent Now</a></div>
                     </div>
                  </div>
               </div>
               <div class="watchs_section_3">
                  <div class="row">
                     <div class="col-md-6">
                        <h4 class="uni_text">02<br>Our SUV</h4>
                        <p class="watchs_text">Genesis GV80 adalah SUV mewah yang menggabungkan desain elegan, kenyamanan premium, dan kinerja yang mengagumkan. Didesain untuk memenuhi kebutuhan pengemudi modern, GV80 menawarkan kombinasi sempurna antara gaya hidup mewah dan kepraktisan SUV.</p>
                        <h4 class="rate_text"><span style="color: #b60213;">IDR</span>5.000.000/Day</h4>
                        <div class="read_bt1"><a href="/watchs">Rent Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="image_2"><img src="images/img-2.png"></div>
                     </div>
                  </div>
               </div>
               <div class="seemore_bt"><a href="/allcar">See More</a></div>
            </div>
         </div>
         <!-- watchs section end -->
         <!-- about section start -->
         <div class="about_section layout_padding">
            <div class="container">
               <h1 class="watchs_taital"><br>About Rent</h1>
               <div class="about_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <p class="about_text">PT. Transindo Rent Car menyediakan berbagai pilihan kendaraan, mulai dari mobil ekonomi yang hemat bahan bakar hingga SUV mewah dan Sedan Mewah. Dengan armada kendaraan yang terawat dengan baik dan terus diperbarui, pelanggan memiliki fleksibilitas untuk memilih mobil yang sesuai dengan kebutuhan mereka, baik untuk perjalanan bisnis, liburan, atau keperluan sehari-hari.</p>
                        <div class="read_bt1"><a href="#">Rent Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="image_2"><img src="images/img-3.png"></div>
                     </div>
                  </div>
               </div>
               <div class="about_section_3">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="border_main">
                           <div class="image_4"><img src="images/img-4.png"></div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="border_main">
                           <div class="image_4"><img src="images/img-5.png"></div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="border_main">
                           <div class="image_4"><img src="images/img-6.png"></div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="border_main">
                           <div class="image_4"><img src="images/img-7.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- about section end -->
         <!-- testimonial section start -->
         <div class="testimonial_section layout_padding">
            <div class="container">
               <h1 class="watchs_taital">03<br>Testimonial</h1>
               <div class="testimonial_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="box_main">
                           <p class="testimonial_text">Saya baru pertama kali menggunakan Transindo Luxy Car Rent untuk menyewa mobil selama liburan keluarga kami, dan saya sangat terkesan dengan layanan yang mereka berikan. Proses pemesanan online sangat mudah dan cepat, dan armada mobil yang mereka miliki sangat berkualitas. Mobil yang kami sewa sangat bersih dan nyaman, dan staf di kantor penyewaan sangat ramah dan membantu. Kami pasti akan menggunakan Rent lagi untuk perjalanan berikutnya!</p>
                        </div>
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h6 class="client_name">Mochammad Fahmi</h6>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="box_main">
                           <p class="testimonial_text">Saya sering melakukan perjalanan bisnis, dan Transindo Car Rent telah menjadi mitra yang luar biasa dalam menyediakan kendaraan yang saya butuhkan. Mereka memiliki pilihan mobil yang luas, termasuk beberapa model terbaru dengan fitur-fitur terkini. Saya sangat menghargai transparansi biaya dan kemudahan proses penyewaan yang mereka tawarkan. Layanan pelanggan mereka juga luar biasa - responsif dan selalu siap membantu.</p>
                        </div>
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img1.png"></div>
                           </div>
                           <div class="client_right">
                              <h6 class="client_name">Santi</h6>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="seemore_bt_1"><a href="#">See More</a></div>
            </div>
         </div>
         <!-- testimonial section end -->
         <!-- contact section start -->
         <div class="contact_section layout_padding">
            <div class="container">
               <h1 class="watchs_taital">04<br>Get In Touch</h1>
            </div>
            <div class="contact_section_2">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                     <div class="col-md-6 padding_right_0">
                        <div class="map_section"><img src="images/map-img.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- contact section end -->
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