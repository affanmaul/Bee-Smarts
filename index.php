<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BeeSmarts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

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


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">
            <img src="logo21.png" alt="BeeSmarts" width="200"></a>
          </div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Materi</a></li>
                <li><a href="#programs-section" class="nav-link">Motivasi</a></li>
                <li><a href="#teachers-section" class="nav-link">Founder</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Hubungi Kami</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['errorp']=="invalidmailuid"){
                          echo '<div style="color:red;">Invalid username and e-mail !</div>';
                        }else if ($_GET['errorp']=="invaliduid"){
                          echo '<div style="color:red;">Invalid username !</div>';
                        }else if ($_GET['errorp']=="invalidmail"){
                          echo '<div style="color:red;">Invalid e-mail !</div>';
                        }else if ($_GET['errorp']=="passwordcheck"){
                          echo '<div style="color:red;">Passwords don\'t match!</div>';
                        }else if ($_GET['errorp']=="usertaken"){
                          echo '<div style="color:red;">Username is already taken!</div>';
                        }
                      }elseif (isset($_GET['signup']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                      }
                       ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                          echo  isset($_GET['uid']) ? $_GET['uid']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                        value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                          echo  isset($_GET['mail']) ? $_GET['mail']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>Sign Up</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Masuk</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])){
                        if ($_GET['error']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['error']=="wrongpwd"){
                          echo '<div style="color:red;">Wrong password!</div>';
                        }else if ($_GET['error']=="nomatch"){
                          echo '<div style="color:red;">There\'s no match for your email !</div>';

                      }elseif (isset($_GET['login']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Sign in Successful !</div>';
                      }
                  }?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                        value="<?php if (isset($_GET['error'])){
                                        if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                              echo  isset($_GET['mail'])?$_GET['mail']:'';
                                        }else {
                                              echo '';
                                             }
                    }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Lupa password?</a>
                      <button>Masuk</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                    <div id="overlay-left" class="overlay-panel overlay-left">
                          <h1>Welcome Back!</h1>
                          <p>To keep connected with us please login with your personal info</p>
                          <button class="ghost" id="signIn">Masuk</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                          <h1>Hallo, Pelajar!</h1>
                          <p>Masukkan data diri anda untuk memulai petualangan belajar bersama kami</p>
                          <button class="ghost" id="signUp">Daftar</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--end-->
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Materi</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <div class="meta"><span class="icon-clock-o"></span>1 Pertemuan/Minggu</div>
                <h3><a href="#">Bahasa Inggris</a></h3>
                <p>Struggle that you do today is the single way to build a better future.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajar</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/indonesia.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <div class="meta"><span class="icon-clock-o"></span>1 Pertemuan/Minggu</div>
                <h3><a href="#">Bahasa Indonesia</a></h3>
                <p>Pelajar penulisan bahasa Indonesia yang benar</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajar</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/ips.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <div class="meta"><span class="icon-clock-o"></span>1 pembelajaran/Minggu</div>
                <h3><a href="#">IPS</a></h3>
                <p>IPS meata pelajaran yang mempelajari kehidupan sosial, sejarah, gogerafi, dan lain-lain</p>
              </div> 
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajar</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/pkn.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <div class="meta"><span class="icon-clock-o"></span>1 Pertemuan/Minggu</div>
                <h3><a href="#">Pendidikan Kewarganegaraan</a></h3>
                <p>"Berbeda-beda tetapi tetap satu"</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajar</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_5.png" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <h3><a href="#">Matematika</a></h3>
                <p>Matematika ilmu yang menyenangkan</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajar</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/ipa.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Free</span>
                <div class="meta"><span class="icon-clock-o"></span>1 Pertemuan/Minggu</div>
                <h3><a href="#">Ilmu Pengetahuan Alam</a></h3>
                <p>Ipa mempelajari segala objek di alam dengan segala interaksinya</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Pelajaran</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
              </div>
            </div>

          </div>



        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Sebelumnya</button>
            <button class="customNextBtn btn btn-primary m-1">Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Program Kami</h2>
            <p>Kami membuat pembelajaran menjadi SIMPEL, MUDAH, dan dapat diakses SIAPA SAJA untuk mendapatkan pelajaran terbaik.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/mot2.jpg" alt="Image" class="img-fluid">
        </div>
        
        
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/mot1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/mot3.jpg" alt="Image" class="img-fluid">
          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Founder</h2>
            <p class="mb-5">The best we promise the best we are !</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Affan Maulana</h3>
                <p class="position">Web Developer</p>
                <p>Lebih dari 5 tahun pengalaman berkerja di marketplace ternama bidang Web Engineer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Muhamad Satrio</h3>
                <p class="position">Web Developer</p>
                <p>Lebih dari 5 tahun pengalaman berkerja di marketplace ternama bidang Web Engineer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_33.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Muhammad Wafa Al-ausath</h3>
                <p class="position">Web Developer</p>
                <p>Lebih dari 5 tahun pengalaman berkerja di marketplace ternama bidang Web Engineer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/pendidikan.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Ki Hadjar Dewantara</h3>
            <blockquote>
              <p>&ldquo; Apapun yang dilakukan oleh seseorang itu, hendaknya dapat bermanfaat bagi dirinya sendiri, bermanfaat bagi bangsanya, dan bermanfaat bagi manusia di dunia pada umumnya. &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Mengapa Pilih Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Materi Pembelajaran Terpecaya</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Dipercayai berbagai sekolah baik negeri maupun swasta</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals pengajar</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Dapat mengembangkan bakat yang dimiliki</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Platform pembelajaran online terbaik</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Bisa dibuka dimana dan kapan saja</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">

            <h2 class="section-title mb-3">Hubungi Kami</h2>
            <p class="mb-5">Kami akan senang jika di berikan masukan dan kritik anda</p>
            <!-- Beginning of the php for the contact form -->
            <?php
            // Message Vars
            $msg = '';
            $msgClass = '';

            // Check For Submit
            if(filter_has_var(INPUT_POST, 'submit')){
              // Get Form Data
              $name = htmlspecialchars($_POST['name']);
              $email = htmlspecialchars($_POST['email']);
              $message = htmlspecialchars($_POST['message']);
              $subject = htmlspecialchars($_POST['subject']);

              // Check Required Fields
              if(!empty($email) && !empty($name) && !empty($message) && !empty($subject)){
                // Passed
                // Check Email
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                  // Failed
                  $msg = 'Please use a valid email';
                  $msgClass = 'alert-danger';
                } else {
                  // Passed
                  $toEmail = 'support@lacademy.com';
                  $body = $subject.'<h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

                  // Email Headers
                  $headers = "MIME-Version: 1.0" ."\r\n";
                  $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                  // Additional Headers
                  $headers .= "From: " .$name. "<".$email.">". "\r\n";

                  if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                  } else {
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                  }
                }
              } else {
                // Failed
                $msg = 'Please fill in all fields';
                $msgClass = 'alert-danger';
              }
            }
             ?>
             <?php if($msg != ''): ?>
                 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
               <?php endif; ?>
            <!-- End of the php for the contact form -->
            <form method="post" action="index.php#contact-section" data-aos="fade" id="contact_form">
              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_fullname"></div>
                  <input type="text" name="name" id="contact_fullname" class="form-control" placeholder="Full name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_subject"></div>
                  <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_email"></div>
                  <input type="email" id="contact_email" name="email"  class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_message"></div>
                  <textarea class="form-control" id="contact_message" name="message" cols="30" rows="10" placeholder="Write your message here."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Kirim">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>BeeSmarts</h3>
            <p>Tempat beljar online gratis, lengkap, dan materi yang terpercaya</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="nav-link">Home</a></li>
              <li><a href="#courses-section" class="nav-link">Courses</a></li>
              <li><a href="#programs-section" class="nav-link">Programs</a></li>
              <li><a href="#teachers-section" class="nav-link">Teachers</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Be succes and never surrender.</p>
            <form action="https://www.youtube.com/channel/UC0C8XNW3XGGWBZWYnNLYHow" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>
