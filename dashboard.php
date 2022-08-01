<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
if(!isset($_SESSION['login_status'])){
  echo "You Are Not Allowed";
  die();
}
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$email_from_session = $_SESSION['login_email'];
$select_query ="SELECT name FROM php_user WHERE email = '$email_from_session'";
$name_query = mysqli_fetch_assoc(mysqli_query($db_conect, $select_query))['name'];
$select_q = "SELECT user_photo From php_user WHERE email = '$email_from_session'";
$select_photo = mysqli_query($db_conect,$select_q);
?>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard</title>
    </head>
    <body>
      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
        </nav>

        <div class="sl-pagebody bg-dark">
          <div class="sl-page-title">
            <h1 class="text-center">Welcome To Dashboard</h1>
              <div class="text-center">
                <img class="border" height="250" width="250" src="picture/profile_img/<?php echo mysqli_fetch_assoc($select_photo)['user_photo'];?>" alt="no immage">
              </div>
                <h2 class="text-center">Email:<?php echo $email_from_session ?></h2>
                <h2 class="text-center">Role:<?=$_SESSION['login_role']?></h2>
                <h3 class="text-center">Name:<?php echo $name_query ?></h3>
          </div><!-- sl-page-title -->

        </div><!-- sl-pagebody -->
      </div><!-- sl-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
    </body>
  </html>
  <?php
  require_once 'includs/dashboard_footer.php';
  ?>
