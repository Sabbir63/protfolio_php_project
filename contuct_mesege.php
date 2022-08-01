<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$select_contuct_query = "SELECT * FROM php_contact";
$sqli_query = mysqli_query($db_conect,$select_contuct_query);
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Table</title>
    </head>
    <body>
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
            <a class="breadcrumb-item" href="setings.php">Settings</a>
            <span class="breadcrumb-item active">Contuct Message</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <div class="card text-white bg-dark">
                <div class="card-header text-center">User Table</div>
                <div class="card-body">
                    <?php
                      if (isset($_SESSION['delete'])) {
                        ?>
                        <div class="text-white bg-danger p-2 mb-3">
                          <?php
                        echo $_SESSION['delete'];
                        ?>
                      </div>
                        <?php
                        unset($_SESSION['delete']);
                      }
                    ?>
                  <!-- On cells (`td` or `th`) -->
                  <table class="table table-dark table-hover">
                    <tr>
                      <td class="table-primary">Contuct Name</td>
                      <td class="table-success">Contuct Email</td>
                      <td class="table-info">Contuct Messege</td>
                      <td class="table-danger">DELET</td>
                   </tr>
                   <?php foreach ($sqli_query as $data): ?>
                   <tr>
                       <td class="table-primary">
                         <?=$data['guest_name']?>
                       </td>
                       <td class="table-success">
                         <?=$data['guest_email']?>
                       </td>
                       <td class="table-info">
                         <?=$data['guest_message']?>
                       </td>
                      <td class="table-danger">
                          <a class="btn btn-outline-danger" href="contuct_delete.php?id= <?=$data['id']?>">Delete</a>
                     </td>
                   </tr>
                 <?php endforeach; ?>
                  </table>
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
