<?php
session_start();
require_once "includs/opp_db.php";
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';

// header('location: change_password.php');
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Service Content</div>
              <div class="card-body">
                <table class="table table-dark table-striped">
                  <tr>
                    <td class="table-primary">Service Icon</td>
                    <td class="table-warning">Service Title</td>
                    <td class="table-primary">Service Description</td>
                    <td class="table-warning">Status</td>
                 </tr>

                 <?php foreach ($obj_database->all("php_service") as $service) { ?>
                 <tr>
                   <td class="table-primary">
                     <i class="<?=$service['service_icon']?>"></i>
                   </td>
                   <td class="table-warning">
                     <?=$service['service_title']?>
                   </td>
                   <td class="table-primary">
                     <?=$service['service_descript']?>
                  </td>
                  <td class="table-warning">
                    <?php if ($service['status'] == 'active'): ?>
                      <span class="badge bg-success">
                        <?=$service['status']?>
                      </span>
                      <a class="btn btn-primary mt-2" href="status_activ_deactive.php?id=<?=$service['id']?>&what_to_do=deactive">Deactive</a>
                      <?php else: ?>
                        <span class="badge bg-danger">
                          <?=$service['status']?>
                        </span>
                        <a class="btn btn-info mt-2" href="status_activ_deactive.php?id=<?=$service['id']?>&what_to_do=active">Active</a>
                    <?php endif; ?>

                 </td>
                </tr>
              <?php } ?>
                </table>
              </div>
            </div>

            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Service</div>
              <div class="card-body">
                <form action="service_post.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Service Icon</label>
                    <input type="text" class="form-control" name="service_icon" aria-describedby="emailHelp">
                    <a href="https://fontawesome.com/v4/icons/">Fontawesome</a>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Service Title</label>
                    <input type="text" class="form-control" name="service_title" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Service Description</label>
                    <textarea name="service_descript" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                  </div>
                  <button type="submit" class="btn btn-primary">Service Now</button>
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
