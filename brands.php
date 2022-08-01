<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$brand_select_query = "SELECT * FROM brands";
$brand_data_db = mysqli_query($db_conect,$brand_select_query);

// header('location: change_password.php');
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Brands</title>
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
                       <?php foreach ($brand_data_db as $brands): ?>

                       <td class="table-primary">
                        <img width="100" height="100" src="picture/brands_img/<?=$brands['brands_img']?>" alt="">
                      </td>

                     <?php endforeach; ?>
                    </tr>
                </table>
              </div>
            </div>
            <?php
                if($_SESSION['login_role'] == 'viewer' && 'author'):
             ?>
             <!-- <h5 class="text-white text-center">You Are Not Alowed</h5> -->
           <?php else: ?>
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Brand Upload</div>

              <div class="card-body">
                <form action="brands_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand Image</label>
                    <input type="file" class="form-control" name="brand_img" aria-describedby="emailHelp">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary ">Upload Now</button>
                  </div>
                  </form>
              </div>
            <?php endif; ?>
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
