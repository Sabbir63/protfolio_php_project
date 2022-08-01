<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$id = $_GET['id'];
$select_query = "SELECT id,name, email, phone,gender FROM php_user WHERE id = $id";
$select_data = mysqli_query($db_conect, $select_query);
$assoc = mysqli_fetch_assoc($select_data);
// print_r($assoc);
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit User</title>
    </head>
    <body>

      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">Starlight</a>
          <a class="breadcrumb-item" href="index.html">Pages</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <div class="card text-white bg-dark">
              <div class="card-header text-center">Update</div>
              <div class="card-body">
                <form action="update_view.php" method="POST">
                  <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="hidden" name="id" value="<?= $assoc['id'] ?>">
                    <input type="name" class="form-control" value="<?= $assoc['name'] ?>" name="name" aria-describedby="emailHelp">
                    <input type="hidden" class="form-control" value="<?= $assoc['name'] ?>" name="old_name" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" value="<?= $assoc['email'] ?>" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="phone" class="form-control" value="<?= $assoc['phone'] ?>" name="phone" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <br>
                    <input type="radio" id="male" name="gender" value="male" <?php
                      if ($assoc['gender'] == "male") {
                        echo "checked";
                      }
                     ?>>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"<?php
                      if ($assoc['gender'] == "female") {
                        echo "checked";
                      }
                     ?>>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other"<?php
                      if ($assoc['gender'] == "other") {
                        echo "checked";
                      }
                     ?>>
                    <label for="other">Other</label>
                  </div>

                    <div class="text-center"><button type="submit" class="btn btn-primary">Update</button>
                    </div>
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
