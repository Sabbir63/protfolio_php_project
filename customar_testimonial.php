<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
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
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Testimonial Content</div>
              <div class="card-body">
                <table class="table table-dark table-hover">
                    <tr>
                      <td class="table-primary">Testimonial Owner Image</td>
                   </tr>
                  <!-- <tr>
                    <th class="table-primary text-center"></th>
                 </tr> -->
                     <tr>
                       <td class="table-primary">
                        <img width="250" height="250" src="picture/profile_img/<?=$_SESSION['login_photo']?>" alt="">
                      </td>
                    </tr>
                    <td> Testimonial</td>
                    <tr>
                      <?php
                        $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
                        $testimonial_select = "SELECT * FROM customar_testimonial";
                        $data_selected = mysqli_query($db_conect,$testimonial_select);
                        $after_assoc = mysqli_fetch_assoc($data_selected);
                       ?>
                      <td class="table-primary">
                        <label for="exampleInputEmail1" class="form-label">Testimonial Description</label>
                        <input disabled type="text" class="form-control" value="<?=$after_assoc['test_description']?>" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Testimonial Title</label>
                        <input disabled type="text" class="form-control" value="<?=  $_SESSION['login_name']?>" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Testimonial Title</label>
                        <input disabled type="text" class="form-control" value="<?=$after_assoc['test_title']?>" aria-describedby="emailHelp">
                     </td>
                   </tr>
                </table>
              </div>
            </div>
            <div class="card text-white bg-dark mt-1">
              <div class="card-header text-center">Testimonial</div>
              <div class="card-body">
                <form action="customar_testimonial_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Testimonial Description</label>
                    <textarea  type="text" class="form-control" name="test_description" aria-describedby="emailHelp"></textarea>

                    <label for="exampleInputEmail1" class="form-label">Testimonial Title</label>
                    <input type="text" class="form-control" name="test_title" aria-describedby="emailHelp">

                    <div class="text-center mt-5">
                      <button type="submit" class="btn btn-primary">Upload Now</button>
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
