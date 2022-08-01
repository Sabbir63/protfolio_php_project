<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
require_once 'includs/opp_db.php';
// header('location: change_password.php');
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="css/fontawesome-all.min.css">
      <title>From Validation</title>
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
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-7">
                <div class="card text-white bg-dark mt-1">
                  <div class="card-header text-center">Counter Up Content</div>
                  <div class="card-body">
                    <table class="table table-dark table-hover">
                      <tr>
                        <td class="table-primary">Counter Up Icon</td>
                        <td class="table-primary">Counter Up Number</td>
                        <td class="table-primary">Counter Up Title</td>
                     </tr>

                     <?php foreach ($obj_database->all("php_counter_up_section") as $data) { ?>
                     <tr>
                       <td class="table-primary">
                         <i class="<?= $data['counter_up_icon']?>"></i>
                       </td>
                       <td class="table-primary">
                         <?= $data['counter_up_number']?>
                       </td>
                       <td class="table-primary">
                         <?= $data['counterup_up_title']?>
                       </td>
                    </tr>
                  <?php } ?>
                    </table>
                  </div>
                </div>
              </div>

                <div class="col-lg-5">
                <div class="card text-white bg-dark mt-1">
                  <div class="card-header text-center">Counter Up</div>
                  <div class="card-body">
                    <form action="counter_up_post.php" method="POST">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Counter Icon</label>
                        <input type="text" class="form-control" name="counter_up_icon" aria-describedby="emailHelp">
                        <a href="https://fontawesome.com/v4/icons/">Fontawesome</a>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Counter Up Number</label>
                        <input type="text" class="form-control" name="counter_up_number" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Counter Up Title</label>
                        <input type="text" class="form-control" name="counter_up_title" aria-describedby="emailHelp">
                      <button type="submit" class="btn btn-primary mt-2">Update Now</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div><!-- sl-page-title -->
          </div><!-- sl-page-title -->

        </div><!-- sl-pagebody -->
      </div><!-- sl-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
  </body>
  </html>
  <?php
  require_once 'includs/dashboard_footer.php';
  ?>
