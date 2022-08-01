<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
if(!isset($_SESSION['login_status'])){
  header('location: login.php');
  die();
}
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$select_query = "SELECT id,name,email,phone,gender,role FROM php_user";
$data_from_db = mysqli_query($db_conect,$select_query);
// $after_accoc = mysqli_fetch_assoc($data_from_db);Akta data anar jnne
// print_r($data_from_db);
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List</title>
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
              <div class="card-header text-center">User Table</div>
              <div class="card-body">
                <div class="text-white bg-primary mb-3 p-2">
                <div class="text text-left ">
                  <a class="btn btn-danger" href="Delete_all_user.php">Delete All</a>
                  <a class="btn btn-dark" href="Registration.php">Add User</a>
                </div>
                </div>
                <?php
                  if (isset($_SESSION['delete_all_user'])) {
                    ?>
                    <div class="text-white bg-danger p-2 mb-3">
                      <?php
                    echo $_SESSION['delete_all_user'];
                    ?>
                  </div>
                    <?php
                    unset($_SESSION['delete_all_user']);
                  }
                ?>
                <?php
                if (isset($_SESSION['update'])) {
                      ?>
                  <div class="text-white bg-danger p-2 mb-3">
                  <?php
                echo $_SESSION['update'];
                ?>
              </div>
              <?php
              unset($_SESSION['update']);
                }
                  ?>



                <div class="text-white bg-success mb-3">
                  Tottal Users: <?= $data_from_db->num_rows?>
                </div>
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
                    <td class="table-primary">Serial No</td>
                    <td class="table-warning">Id_no</td>
                    <td class="table-primary">Name</td>
                    <td class="table-secondary">Email</td>
                    <td class="table-success">Phone</td>
                    <td class="table-danger">Gender</td>
                    <td class="table-secondary">Action</td>
                    <td class="table-danger">Role</td>
                 </tr>
                 <?php
                  if ($data_from_db->num_rows == 0) {
                    ?>
                    <tr>
                      <td colspan="12" class="text-center text-primary">
                        No Data Available
                      </td>
                    </tr>
                <?php } ?>

                 <?php
                 $serial_no = 1;
                  foreach ($data_from_db as $user_values) {
                 ?>
                 <tr>
                   <td class="table-primary"><?= $serial_no++?></td>
                   <td class="table-warning">
                     <?php
                     print_r($user_values['id']);
                     ?>
                   </td>
                   <td class="table-primary">
                     <?php
                     print_r($user_values['name']);
                     ?>
                   </td>
                   <td class="table-secondary">
                     <?php
                     print_r($user_values['email']);
                     ?>
                   </td>
                   <td class="table-success">
                     <?php
                     print_r($user_values['phone']);
                     ?>
                   </td>
                   <td class="table-danger">
                     <?php
                    print_r($user_values['gender']);
                    ?>
                  </td>
                  <td class="table-secondary">
                      <a class="btn btn-outline-primary" href="edit.php?id=<?=$user_values['id']?>">Edit</a>
                      <a class="btn btn-outline-danger" href="delete.php?id=<?=$user_values['id']?>">Delete</a>
                 </td>
                 <td class="table-danger">
                   <?php
                  print_r($user_values['role']);
                  ?>
                </td>
                 </tr>
                 <?php
                    }
                 ?>
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
