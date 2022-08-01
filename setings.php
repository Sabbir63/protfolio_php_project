<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$select_setings_query = "SELECT * FROM php_text_setting";
$sqli_setings_query = mysqli_query($db_conect,$select_setings_query);
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"><title>Seting</title>
    </head>
    <body>
      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
          <a class="breadcrumb-item" href="setings.php">Settings</a>
          <span class="breadcrumb-item active">Genaral Settings</span>
        </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <div class="card text-white bg-dark">
              <div class="card-header text-center">Genarel Settings</div>
              <div class="card-body">
                <form class="" action="seting_post.php" method="post">
                  <?php foreach ($sqli_setings_query as $key ): ?>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label" style="text-align: right;"><?=$key['seting_name']?>:</label>
                      <div class="col-sm-8">
                        <input type="text" value="<?=$key['seting_value']?>" class="form-control" id="" name="<?=$key['seting_name']?>">
                      </div>
                    </div>
                    <img src="picture/site_image/seting_picture" alt="">
                  <?php endforeach; ?>
                  <div class="text-center mt-0">
                    <button type="submit" class="btn btn-primary">Update</button>
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
