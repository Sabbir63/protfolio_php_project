  <?php
  session_start();
  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
  $descript_query = "SELECT * FROM php_service WHERE status = 'active' order by id DESC";
  $db_form_data = mysqli_query($db_conect,$descript_query);
  $counter_up_query = "SELECT * FROM php_counter_up_section";
  $data_from_db = mysqli_query($db_conect,$counter_up_query);
  $brand_select_query = "SELECT * FROM brands";


  $text_setting_query = "SELECT * FROM php_text_setting";

  $text_setting_db = mysqli_query($db_conect,$text_setting_query);
  $setings_select_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Name'";
  $owner_name_fromdb = mysqli_query($db_conect,$setings_select_query);

  $text_setting_db = mysqli_query($db_conect,$brand_select_query);
  $owner_bio_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Bio'";
  $owner_bio_fromdb = mysqli_query($db_conect,$owner_bio_query);

  $text_setting_db = mysqli_query($db_conect,$brand_select_query);
  $owner_fb_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Fb_Link'";
  $oner_fb_fromdb = mysqli_query($db_conect,$owner_fb_query);

  $text_setting_db = mysqli_query($db_conect,$brand_select_query);
  $owner_twit_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Twit_Link'";
  $oner_twit_fromdb = mysqli_query($db_conect,$owner_twit_query);

  $text_setting_db = mysqli_query($db_conect,$brand_select_query);
  $owner_about_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_About'";
  $owner_about_fromdb = mysqli_query($db_conect,$owner_about_query);
  ?>

  <!doctype html>
  <html class="no-js" lang="en">

  <!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Kufa - Personal Portfolio HTML5 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
      <!-- Place favicon.ico in the root directory -->

      <!-- CSS here -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/fontawesome-all.min.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/default.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
  </head>

  <body class="theme-bg">

      <!-- preloader -->
      <div id="preloader">
          <div id="loading-center">
              <div id="loading-center-absolute">
                  <div class="object" id="object_one"></div>
                  <div class="object" id="object_two"></div>
                  <div class="object" id="object_three"></div>
              </div>
          </div>
      </div>
      <!-- preloader-end -->

      <!-- header-start -->
      <header>
          <div id="header-sticky" class="transparent-header">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="main-menu">
                              <nav class="navbar navbar-expand-lg">
                                  <a href="index.php" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                  <a href="index.php" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                      <span class="navbar-icon"></span>
                                      <span class="navbar-icon"></span>
                                      <span class="navbar-icon"></span>
                                  </button>
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                      <ul class="navbar-nav ml-auto">
                                          <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                      </ul>
                                  </div>
                                  <div class="header-btn">
                                      <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                  </div>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- offcanvas-start -->
          <div class="extra-info">
              <div class="close-icon menu-close">
                  <button>
                      <i class="far fa-window-close"></i>
                  </button>
              </div>
              <div class="logo-side mb-30">
                  <a href="index-2.html">
                      <img src="img/logo/logo.png" alt="" />
                  </a>
              </div>
              <div class="side-info mb-30">
                <?php
                // Address
                $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                $select_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Address'";
                $sqli_setings_query = mysqli_query($db_conect,$select_setings_query);
                $address = mysqli_fetch_assoc($sqli_setings_query);
                //Phone
                $phone_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Phone'";
                $phone_from_db = mysqli_query($db_conect,$phone_setings_query);
                $phone = mysqli_fetch_assoc($phone_from_db);
                //email
                $email_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'email'";
                $email_from_db = mysqli_query($db_conect,$email_setings_query);
                $email = mysqli_fetch_assoc($email_from_db);
                 ?>

                  <div class="contact-list mb-30">
                      <h4>Office Address</h4>
                      <p><?=$address['seting_value']?></p>
                  </div>
                  <div class="contact-list mb-30">
                      <h4>Phone Number</h4>
                      <p><?=$phone['seting_value']?></p>
                  </div>
                  <div class="contact-list mb-30">
                      <h4>Email Address</h4>
                      <p><?=$email['seting_value']?></p>
                  </div>
              </div>

              <!-- Social Link -->
              <?php
              $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
              $aselect_query = "SELECT * FROM php_text_setting";

              $ttext_setting_db = mysqli_query($db_conect,$aselect_query);
              $fowner_fb_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Fb_Link'";
              $foner_fb_fromdb = mysqli_query($db_conect,$fowner_fb_query);

              $text_setting_db = mysqli_query($db_conect,$aselect_query);
              $towner_twit_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Twit_Link'";
              $toner_twit_fromdb = mysqli_query($db_conect,$towner_twit_query);

              $text_setting_db = mysqli_query($db_conect,$aselect_query);
              $powner_printer_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Printerest_Link'";
              $powner_print_fromdb = mysqli_query($db_conect,$powner_printer_Link);

              $text_setting_db = mysqli_query($db_conect,$aselect_query);
              $iowner_Insta_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Insta_Link'";
              $iowner_insta_fromdb = mysqli_query($db_conect,$iowner_Insta_Link);
               ?>

              <div class="social-icon-right mt-20">
                <?php
                $fb_link = mysqli_fetch_assoc($foner_fb_fromdb)['seting_value'];
                if($fb_link):
                ?>
                  <a href="<?=$fb_link?>"><i class="fab fa-facebook-f"></i></a>
                  <?php
                    endif;
                  ?>

                  <?php
                  $toner_twit = mysqli_fetch_assoc($toner_twit_fromdb)['seting_value'];
                  if($toner_twit):
                  ?>
                  <a href="<?=$toner_twit?>"><i class="fab fa-twitter"></i></a>
                  <?php
                    endif;
                  ?>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <?php
                  $instagram_link = mysqli_fetch_assoc($iowner_insta_fromdb)['seting_value'];
                 if($instagram_link):?>
                 <a href="<?=$instagram_link?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
              </div>
          </div>
          <div class="offcanvas-overly"></div>
          <!-- offcanvas-end -->
      </header>
      <!-- header-end -->

      <!-- main-area -->
      <main>

          <!-- banner-area -->
          <section id="home" class="banner-area banner-bg fix">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-7 col-lg-6">
                          <div class="banner-content">
                              <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                              <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=mysqli_fetch_assoc($owner_name_fromdb)['seting_value']?></h2>
                              <p class="wow fadeInUp" data-wow-delay="0.6s"><?=mysqli_fetch_assoc($owner_about_fromdb)['seting_value']?></p>
                              <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                  <ul>
                                    <?php
                                    $text_setting_db = mysqli_query($db_conect,$brand_select_query);
                                    $owner_Insta_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Insta_Link'";
                                    $owner_insta_fromdb = mysqli_query($db_conect,$owner_Insta_Link);

                                    $text_setting_db = mysqli_query($db_conect,$brand_select_query);
                                    $owner_printer_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Printerest_Link'";
                                    $owner_print_fromdb = mysqli_query($db_conect,$owner_printer_Link);
                                    ?>
                                    <?php
                                      $fb_link = mysqli_fetch_assoc($oner_fb_fromdb)['seting_value'];
                                     if ($fb_link): ?>
                                      <li>
                                        <a href="<?=$fb_link?>">
                                        <i class="fab fa-facebook-f"></i></a>
                                      </li>
                                    <?php endif; ?>

                                    <?php
                                      $twit_link = mysqli_fetch_assoc($oner_twit_fromdb)['seting_value'];
                                     if ($twit_link): ?>
                                     <li>
                                       <a href="<?=$twit_link?>">
                                       <i class="fab fa-twitter"></i></a>
                                     </li>
                                    <?php endif; ?>

                                    <?php
                                      $insta_link = mysqli_fetch_assoc($owner_insta_fromdb)['seting_value'];
                                     if($insta_link):?>
                                      <li><a href="<?=$insta_link?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>

                                    <?php
                                    $print_link = mysqli_fetch_assoc($owner_print_fromdb)['seting_value'];
                                    if($print_link):?>
                                      <li><a href="<?=$print_link?>"><i class="fab fa-pinterest"></i></a></li>
                                    <?php endif; ?>
                                  </ul>
                              </div>
                              <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                          </div>
                      </div>
                      <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <?php
                        $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                        $db_banner_data = "SELECT banner_img FROM banner";
                        $query_con = mysqli_query($db_conect,$db_banner_data);
                        $after_assoc = mysqli_fetch_assoc($query_con);

                        ?>
                          <div class="banner-img text-right">
                              <img style="width: 100%; height: 834px; " src="picture/banner_img/<?=$after_assoc['banner_img']?>" alt="">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
          </section>
          <!-- banner-area-end -->

          <!-- about-area-->
          <section id="about" class="about-area primary-bg pt-120 pb-120">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-6">
                          <div class="about-img">
                              <img style="width: 100%; height: 534px; " src="picture/banner_img/<?=$after_assoc['banner_img']?>" title="me-01" alt="me-01">
                          </div>
                      </div>
                      <div class="col-lg-6 pr-90">
                          <div class="section-title mb-25">
                              <span>Introduction</span>
                              <h2>About Me</h2>
                          </div>
                          <div class="about-content">
                              <p><?=mysqli_fetch_assoc($owner_bio_fromdb)['seting_value']?></p>
                              <h3>Education:</h3>
                          </div>
                          <!-- Education Item -->
                          <div class="education">
                              <div class="year">2020</div>
                              <div class="line"></div>
                              <div class="location">
                                  <span>PHD of Interaction Design &amp; Animation</span>
                                  <div class="progressWrapper">
                                      <div class="progress">
                                          <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Education Item -->
                          <!-- Education Item -->
                          <div class="education">
                              <div class="year">2016</div>
                              <div class="line"></div>
                              <div class="location">
                                  <span>Master of Database Administration</span>
                                  <div class="progressWrapper">
                                      <div class="progress">
                                          <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Education Item -->
                          <!-- Education Item -->
                          <div class="education">
                              <div class="year">2010</div>
                              <div class="line"></div>
                              <div class="location">
                                  <span>Bachelor of Computer Engineering</span>
                                  <div class="progressWrapper">
                                      <div class="progress">
                                          <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Education Item -->
                          <!-- Education Item -->
                          <div class="education">
                              <div class="year">2005</div>
                              <div class="line"></div>
                              <div class="location">
                                  <span>Diploma of Computer</span>
                                  <div class="progressWrapper">
                                      <div class="progress">
                                          <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Education Item -->
                      </div>
                  </div>
              </div>
          </section>
          <!-- about-area-end -->

          <!-- Services-area -->
          <section id="service" class="services-area pt-120 pb-50">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-xl-6 col-lg-8">
                          <div class="section-title text-center mb-70">
                              <span>WHAT WE DO</span>
                              <h2>SERVICES AND SOLUTIO</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <?php foreach ($db_form_data as $data) { ?>
                      <div class="col-lg-4 col-md-6">
                          <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                              <i class="<?=$data['service_icon']?>"></i>
                              <h3><?=$data['service_title']?></h3>
                              <p>
                                  <?=$data['service_descript']?>
                              </p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
              </div>
          </section>
          <!-- Services-area-end -->

          <!-- Portfolios-area -->
          <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-xl-6 col-lg-8">
                          <div class="section-title text-center mb-70">
                              <span>Portfolio Showcase</span>
                              <h2>My Recent Best Works</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <?php
                    $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                    $protfolio_select_query = "SELECT * FROM php_protfoliio";
                    $protfolio_from_bd = mysqli_query($db_conect,$protfolio_select_query);

                     ?>
                      <?php foreach ($protfolio_from_bd as $protfolio): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="picture/protfolio_img/<?=$protfolio['img_thumble']?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?=$protfolio['protfolio_title']?></span>
                                    <h4><a href="portfolio_single.php?id=<?=$protfolio['id']?>"><?=$protfolio['protfolio_heding']?></a></h4>
                                    <a href="portfolio_single.php?id=<?=$protfolio['id']?>" class="arrow-btn"><?=$protfolio['protfolio_decription']?><span></span></a>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>
              </div>
          </section>
          <!-- services-area-end -->


          <!-- fact-area -->
          <section class="fact-area">
              <div class="container">
                  <div class="fact-wrap">
                      <div class="row justify-content-between">
                          <?php foreach ($data_from_db as $counter_up): ?>
                          <div class="col-xl-2 col-lg-3 col-sm-6">
                              <div class="fact-box text-center mb-50">
                                  <div class="fact-icon">
                                      <i class="<?=$counter_up['counter_up_icon']?>"></i>
                                  </div>
                                  <div class="fact-content">
                                      <h2><span class="count">
                                              <?=$counter_up['counter_up_number']?>
                                          </span></h2>
                                      <span>
                                          <?=$counter_up['counterup_up_title']?>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <?php endforeach; ?>
                      </div>
                  </div>
              </div>
          </section>
          <!-- fact-area-end -->

          <!-- testimonial-area -->
          <section class="testimonial-area primary-bg pt-115 pb-115">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-xl-6 col-lg-8">
                          <div class="section-title text-center mb-70">
                              <span>testimonial</span>
                              <h2>happy customer quotes</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-xl-9 col-lg-10">
                          <div class="testimonial-active">
                            <?php
                              $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                              $testimonial_select = "SELECT * FROM customar_testimonial";
                              $data_selected = mysqli_query($db_conect,$testimonial_select);
                              // $after_assoc = mysqli_fetch_assoc($data_selected);
                             ?>
                            <?php foreach ($data_selected as $sliode): ?>
                              <div class="single-testimonial text-center">
                                  <div class="testi-avatar">
                                      <img style="border-radius: 50px;" height="100px" width="100px" src="picture/profile_img/<?=$_SESSION['login_photo']?>" alt="img">
                                  </div>
                                  <div class="testi-content">
                                      <h4><?=$sliode['test_description']?></h4>
                                      <div class="testi-avatar-info">
                                          <h5><?=  $_SESSION['login_name']?></h5>
                                          <span><?=$sliode['test_title']?></span>
                                      </div>
                                  </div>
                              </div>
                            <?php endforeach; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- testimonial-area-end -->

          <!-- brand-area -->
          <div class="barnd-area pt-100 pb-100">
              <div class="container">
                  <div class="row brand-active">
                    <?php
                      $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                      $brand_select = "SELECT * FROM brands";
                      $brands_query = mysqli_query($db_conect,$brand_select);
                     ?>

                    <?php foreach ($brands_query as $brands): ?>
                      <div class="col-xl-2">
                          <div class="single-brand">
                              <img src="picture/brands_img/<?=$brands['brands_img']?>" alt="img">
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
              </div>
          </div>
          <!-- brand-area-end -->

          <!-- contact-area -->
          <section id="contact" class="contact-area primary-bg pt-120 pb-120">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-6">
                          <div class="section-title mb-20">
                              <span>information</span>
                              <h2>Contact Information</h2>
                          </div>
                          <div class="contact-content">
                              <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                              <h5>OFFICE IN <span>NEW YORK</span></h5>
                              <div class="contact-list">
                                <?php
                                // Address
                                $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                                $select_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Address'";
                                $sqli_setings_query = mysqli_query($db_conect,$select_setings_query);
                                $address = mysqli_fetch_assoc($sqli_setings_query);
                                //Phone
                                $phone_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Phone'";
                                $phone_from_db = mysqli_query($db_conect,$phone_setings_query);
                                $phone = mysqli_fetch_assoc($phone_from_db);
                                //email
                                $email_setings_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'email'";
                                $email_from_db = mysqli_query($db_conect,$email_setings_query);
                                $email = mysqli_fetch_assoc($email_from_db);
                                 ?>
                                  <ul>
                                      <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $address['seting_value'] ?></li>
                                      <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $phone['seting_value'] ?></li>
                                      <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $email['seting_value'] ?></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="contact-form">
                            <?php
                              if(isset($_SESSION['Contuct_from'])) {
                            ?>
                            <div class="alert alert-danger">
                              <?php
                                echo ($_SESSION['Contuct_from']);
                              unset($_SESSION['Contuct_from']);
                              ?>
                            </div>
                              <?php } ?>
                              <form action="contuct_post.php" method="POST">
                                  <input name="guest_name" type="text" placeholder="your name *">
                                  <input name="guest_email" type="email" placeholder="your email *">
                                  <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                  <button class="btn">SEND</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- contact-area-end -->

      </main>
      <!-- main-area-end -->

      <!-- footer -->
      <footer>
          <div class="copyright-wrap">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-12">
                          <div class="copyright-text text-center">
                              <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- footer-end -->





      <!-- JS here -->
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/one-page-nav-min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
  </body>

  <!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

  </html>
