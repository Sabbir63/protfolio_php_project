<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$id = $_GET['id'];
$s_query = "SELECT * FROM php_protfoliio WHERE id = '$id'";
$query = mysqli_query($db_conect,$s_query);
$accocc_After = mysqli_fetch_assoc($query);
 ?>
 <!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
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
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
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
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2><?=$accocc_After['protfolio_heding']?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">

                                <div class="blog-list-thumb mb-35">
                                    <img src="picture/feture_img/<?=$accocc_After['img_feature']?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?=$accocc_After['protfolio_heding']?></h2>
                                    <p><?=$accocc_After['feture_description']?></p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <?php
                                            $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                                            $select_query = "SELECT * FROM php_text_setting";

                                            $text_setting_db = mysqli_query($db_conect,$select_query);
                                            $owner_fb_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Fb_Link'";
                                            $oner_fb_fromdb = mysqli_query($db_conect,$owner_fb_query);

                                            $text_setting_db = mysqli_query($db_conect,$select_query);
                                            $owner_twit_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Twit_Link'";
                                            $oner_twit_fromdb = mysqli_query($db_conect,$owner_twit_query);

                                            $text_setting_db = mysqli_query($db_conect,$select_query);
                                            $owner_printer_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Printerest_Link'";
                                            $owner_print_fromdb = mysqli_query($db_conect,$owner_printer_Link);
                                             ?>
                                            <li class="blog-post-share">
                                                <?php
                                                  $fb_link = mysqli_fetch_assoc($oner_fb_fromdb)['seting_value'];
                                                  // print_r($fb_link['seting_value']);
                                                  if($fb_link):
                                                 ?>
                                                <a href="<?=$fb_link?>"><i class="fab fa-facebook-f"></i></a>
                                              <?php endif; ?>
                                              <?php
                                                $twit_link = mysqli_fetch_assoc($oner_twit_fromdb)['seting_value'];
                                                // print_r($fb_link['seting_value']);
                                                if($twit_link):
                                               ?>
                                                <a href="<?=$twit_link?>"><i class="fab fa-twitter"></i></a>
                                                  <?php endif; ?>

                                                  <?php
                                                    $printrest_link = mysqli_fetch_assoc($owner_print_fromdb)['seting_value'];
                                                    if($printrest_link):
                                                    ?>
                                                <a href="<?= $printrest_link ?>"><i class="fab fa-pinterest-p"></i></a>
                                              <?php endif;?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                              <?php
                                              $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                                              $user_email = $accocc_After['user_mail'];
                                              $image_from_user = "SELECT name,user_photo FROM php_user WHERE email = '$user_email'";
                                              $user_photo_from_db = mysqli_query($db_conect,$image_from_user);
                                              $login_user_photo = mysqli_fetch_assoc($user_photo_from_db);
                                               ?>
                                                <img height="100px" width="100px" src="picture/profile_img/<?=$login_user_photo['user_photo']?>" alt="img">

                                            </div>
                                            <div class="post-avatar-content">
                                              <?php
                                              $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                                              $bio_select_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_About'";
                                              $owner_bio_fromdb = mysqli_query($db_conect,$bio_select_query);

                                               ?>
                                                <h5><?=$accocc_After['user_mail']?></h5>
                                                <h5><?=$login_user_photo['name']?></h5>
                                                <p><?=mysqli_fetch_assoc($owner_bio_fromdb)['seting_value']?></p>
                                                <div class="post-avatar-social mt-15">
                                                  <?php
                                                  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                                                  $select_query = "SELECT * FROM php_text_setting";

                                                  $text_setting_db = mysqli_query($db_conect,$select_query);
                                                  $owner_fb_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Fb_Link'";
                                                  $oner_fb_fromdb = mysqli_query($db_conect,$owner_fb_query);

                                                  $text_setting_db = mysqli_query($db_conect,$select_query);
                                                  $owner_twit_query = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Twit_Link'";
                                                  $oner_twit_fromdb = mysqli_query($db_conect,$owner_twit_query);

                                                  $text_setting_db = mysqli_query($db_conect,$select_query);
                                                  $owner_printer_Link = "SELECT seting_value FROM php_text_setting WHERE seting_name = 'Owner_Printerest_Link'";
                                                  $owner_print_fromdb = mysqli_query($db_conect,$owner_printer_Link);
                                                   ?>
                                                  <?php
                                                    // print_r();
                                                    $fb_link = mysqli_fetch_assoc($oner_fb_fromdb)['seting_value'];
                                                    if($fb_link):
                                                   ?>
                                                    <a href="<?=$fb_link?>"><i class="fab fa-facebook-f"></i></a>
                                                  <?php endif; ?>

                                                  <?php
                                                    // print_r();
                                                    $twit_link = mysqli_fetch_assoc($oner_twit_fromdb)['seting_value'];
                                                    if($twit_link):
                                                   ?>
                                                    <a href="<?=$twit_link?>"><i class="fab fa-twitter"></i></a>
                                                    <?php endif; ?>

                                                    <?php
                                                      // print_r();
                                                      $print_link = mysqli_fetch_assoc($owner_print_fromdb)['seting_value'];
                                                      if($print_link):
                                                     ?>
                                                    <a href="<?=$print_link?>"><i class="fab fa-pinterest-p"></i></a>
                                                      <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
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

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
