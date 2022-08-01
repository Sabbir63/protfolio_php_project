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
      <title>From Validation</title>
    </head>
    <body>
      <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

     <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
       <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
       <div class="tx-center mg-b-60">Professional Admin Template Design</div>
       <form action="loging_from.php" method="POST">
         <?php if (isset($_SESSION['login_error'])) { ?>
           <div class="text-white bg-danger p-2 mb-3">
               <?php
               echo $_SESSION['login_error'];
               unset($_SESSION['login_error']);
               ?>
             </div>
           <?php } ?>
       <div class="form-group">
         <input type="email" class="form-control" placeholder="Enter your email" name="email">
       </div><!-- form-group -->
       <div class="form-group">
         <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
         <input type="checkbox" onclick="passwordshowFunction()">
         <span>Show Password</span>
         <script>
         function passwordshowFunction() {
           var x = document.getElementById("password");
           if (x.type === "password") {
             x.type = "text";
           } else {
             x.type = "password";
           }
           }
         </script>
       </div><!-- form-group -->
       <button type="submit" class="btn btn-info btn-block">Sign In</button>
       </form>
       <div class="mg-t-60 tx-center">Not yet a member? <a href="registration.php" class="tx-info">Sign Up</a></div>
     </div><!-- login-wrapper -->
   </div><!-- d-flex -->
 </body>
</html>
  <?php
  require_once 'includs/dashboard_footer.php';
  ?>
