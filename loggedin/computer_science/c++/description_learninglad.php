<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BeeSmarts </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- links for the navbar that i've made  -->
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styleloggedin.css">
    <!-- End of the links for the navbar that i've made  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../css/aos.css">
    <link rel="stylesheet" href="../../../css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  js-sticky-header site-navbar-target" role="banner">
      <div class="topnav" id="myTopnav">
      <a href="../../../loggedin.php" class="active">Home</a>
          <?php
          if (isset($_SESSION['userId'])){
            echo '<a href="../../../loggedin/profile.php" name="profile">Profile</a>
                  <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
          }
           ?>
         </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 text-white" style="background-image: url('../../../images/bgindo.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Bahasa Indonesia</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white">1 Pertemuan per Minggu<a href="#" class="text-white"></a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Deskripsi Kursus</h3>
              <p>
Dengan website ini siswa diharapkan siswa memiliki kompetensi dalam mendengar, membaca, menulis, menyajikan secara lisan, 
memiliki pengetahuan yang memadai tentang penggunaan bahasa Indonesia secara efektif pada ragam sastra maupun nonsastra. 
Lebih penting dari itu, dengan mempelajari Buku Siswa Bahasa Indonesia generasi Indonesia memiliki minat baca dan minat menulis yang tinggi. 
Cara penyajian buku secara induktif dan berbasis tugas. Buku Siswa membelajarkan siswa untuk bisa menemukan dan belajar berpikir tingkat tinggi. 
Kecerdasan spiritual, kecerdasan emosional, nasionalisme, dan kecerdasan sosial ditumbuhkan secara tidak langsung 
melalui kegiatan-kegiatan kreatif pada Buku Siswa Bahasa ini. Siswa berlatih menyongsong dunia literasi dengan penumbuhan 
minat baca melalui jurnal membaca yang dirancang terintegrasi dalam pembelajaran. Pada tiap bab Buku Siswa ini terdapat bagian-bagian yang mencakup 
(a) pengantar berisi fenomena komunikasi terkait dengan jenis teks yang dipelajari, (b) pemodelan teks diikuti kotak info untuk meningkatkan 
pengetahuan tentang ciri umum teks, (c) membaca/ menyimak intensif untuk melatih keterampilan reseptif sesuai teks yang dipelajari, 
(d) menelaah struktur dan bahasa teks untuk menajamkan penemuan prinsip-prinsip penciptaan teks dan latihan terbimbing menghasilkan 
bagian-bagian teks sebagai bekal mencipta teks secara mandiri, dan (e) latihan mencipta atau menyajikan teks secara kreatif dan kontekstual 
dalam berbagai bentuk baik lisan/ tertulis. Gurumu akan membimbing dan mendampingi dengan penuh semangat. Berproseslah dengan penuh ketekunan dan kegairahan.</p>
            </div>

          </div>

          <div class="col-lg-4 pl-lg-5">
            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Pengajar</h3>
              <div class="mb-4 text-center">
                <img src="../../../images/guru.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                <h3 class="h5 text-black mb-4">Sari Saputri Wojongsari</h3>
                <p>Bahasa Indonesia adalah mata pelajaran yang sangat penting, sebagai guru saya memiliki tanggung jawab yang sangat tinggi untuk memperbaiki penulisan dan pengucapan yang benar dalam 
                  Penggunaan bahasa Indonesia Guru Bahasa Indonesia di SMPN 1 Kota Surabaya tahun 2007 – 2010

Guru Bahasa Indonesia di MA Negeri Mojokerto tahun 2010 – 2014

Guru Bahasa Indonesia di SMA Negeri 1 Mojokerto tahun 2014 – sekarang</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About BeeSmarts</h3>
            <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Keep yourself up to date and receive all kind of news about BeeSmarts.</p>
            <form action="https://www.youtube.com/channel/UC0C8XNW3XGGWBZWYnNLYHow" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.youtube.com/channel/UC0C8XNW3XGGWBZWYnNLYHow" target="_blank" >BeeSmarts</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>


  <script src="../../../js/main.js"></script>

  </body>
</html>
