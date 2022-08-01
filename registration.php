<?php
session_start();
require_once 'includs/dashbord_header.php';
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Registration</title>
    </head>
    <body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Registration <span class="tx-info tx-normal">From</span></div>
      <div class="tx-center mg-b-60">Please Input Fild And Registration</div>
        <form action="RegistrationForm.php" method="POST">
      <div class="form-group">
        <input type="name" class="form-control" name="name" placeholder="Enter your name" required>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
        <?php
          if (isset($_SESSION['duplicate_email_error'])) {
            ?>
          <small class="text-danger mt-2">
              <?php
            echo $_SESSION['duplicate_email_error'];
            unset($_SESSION['duplicate_email_error']);
            ?>
          </small>
            <?php
          }
        ?>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="phone" class="form-control" name="phone" placeholder="Enter your phone" required>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="password" class="form-control" name="conpassword" placeholder="Enter your confirm password" required>
      </div><!-- form-group -->
      <label class="rdiobox">
        <input name="gender" value="male" type="radio">
        <span>Male</span>
      </label>
      <label class="rdiobox">
        <input name="gender" value="female" type="radio">
        <span>Female</span>
      </label>
      <label class="rdiobox">
        <input name="gender" value="other" type="radio">
        <span>Other</span>
      </label>
      <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
      <button type="submit" class="btn btn-info btn-block">Sign Up</button>
      </form>
      <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
</body>
  </html>
  <?php
  require_once 'includs/dashboard_footer.php';
  ?>
