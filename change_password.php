<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$email =  $_SESSION['login_email'];
$select_q = "SELECT user_photo From php_user WHERE email = '$email'";
// header('location: change_password.php');
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>
    </head>
    <body>

      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
          <a class="breadcrumb-item" href="setings.php">Settings</a>
          <span class="breadcrumb-item active">Profile</span>
        </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Password Change</div>
              <div class="card-body">
                <?php if (isset($_SESSION['other_file_sesion'])): ?>
                      <div class="text-white bg-danger p-2 mb-3">
                        <?=$_SESSION['other_file_sesion']; ?>
                        <?php unset($_SESSION['other_file_sesion']); ?>

                        </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['up_image_sesion'])): ?>
                      <div class="text-white bg-danger p-2 mb-3">
                        <?=$_SESSION['up_image_sesion']; ?>
                        <?php unset($_SESSION['up_image_sesion']); ?>

                        </div>
                <?php endif; ?>
                <form action="profile_img_change.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <div class="text-center">
                      <img class="border" height="250" width="250" src="picture/profile_img/<?=mysqli_fetch_assoc(mysqli_query($db_conect,$select_q))['user_photo']?>" alt="">
                      <?php if(mysqli_fetch_assoc(mysqli_query($db_conect,$select_q))['user_photo'] != "avatar.png"):?>
                      <a href="photo_delete.php?PhOtO=<?=mysqli_fetch_assoc(mysqli_query($db_conect,$select_q))['user_photo']?>" class="btn btn-sm btn-danger">Delete</a>
                      <?php endif;?>
                    </div>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Upload Picture</label>
                    <input type="file" class="form-control" name="up_image" aria-describedby="emailHelp" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Change Your Picture</button>
                  </form>
              </div>
            </div>
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Password Change</div>
              <div class="card-body">
                <form action="pass_change.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Old Password</label>
                    <input type="password" class="form-control" name="old_password" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="new_password" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="con_password" aria-describedby="emailHelp">
                  </div>
                  <button type="submit" class="btn btn-primary">Change Password</button>
                  </form>
              </div>
            </div>
          </div><!-- sl-page-title -->

          </div><!-- sl-pagebody -->
        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

    </body>
  </html>
  <?php
  require_once 'includs/dashboard_footer.php';
  ?>
