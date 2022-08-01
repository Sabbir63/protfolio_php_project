<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$db_banner_data = "SELECT banner_img FROM banner";
$query_con = mysqli_query($db_conect,$db_banner_data);
$after_assoc = mysqli_fetch_assoc($query_con);

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
          <a class="breadcrumb-item" href="brands.php">Brands</a>
        </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Brands Content</div>
              <div class="card-body">
                <table class="table table-dark table-hover">
                    <tr>
                      <td class="table-primary">Brands Image</td>
                   </tr>
                  <!-- <tr>
                    <th class="table-primary text-center"></th>
                 </tr> -->
                     <tr>
                       <td class="table-primary">
                          <img width="250" height="250" src="picture/banner_img/<?=$after_assoc['banner_img']?>" alt="no img">
                        </td>
                    </tr>
                </table>
              </div>
            </div>

            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Brand Upload</div>

              <div class="card-body">
                <form action="site_owner_img_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand Image</label>
                    <input type="file" class="form-control" name="banner_img" aria-describedby="emailHelp">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary ">Upload Now</button>
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
