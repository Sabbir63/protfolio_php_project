<?php
session_start();
require_once 'includs/dashbord_header.php';
require_once 'includs/nav_dashboard.php';
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$profile_select = "SELECT * FROM php_protfoliio";
$data_from_db = mysqli_query($db_conect,$profile_select);


 ?>

 <!doctype html>
   <html lang="en">
     <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>From Validation</title>
     </head>
     <body>
       <!-- ########## START: MAIN PANEL ########## -->
       <div class="sl-mainpanel">
         <nav class="breadcrumb sl-breadcrumb">
           <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
           <a class="breadcrumb-item" href="setings.php">Settings</a>
           <span class="breadcrumb-item active">Protfolio Content</span>
         </nav>

         <div class="sl-pagebody">
           <div class="sl-page-title">
             <div class="card text-white bg-dark mt-1">
               <div class="card-header text-center">Protfolios Content</div>
               <div class="card-body">
                 <table class="table table-dark table-hover">
                     <tr>
                       <td class="table-primary">Protfolio Image</td>
                    </tr>
                   <!-- <tr>
                     <th class="table-primary text-center"></th>
                  </tr> -->
                      <tr>
                        <?php foreach ($data_from_db as $data): ?>

                        <td class="table-primary">
                         <img width="100" height="100" src="picture/protfolio_img/<?=$data['img_thumble']?>" alt="">
                       </td>

                      <?php endforeach; ?>
                     </tr>
                     <td> Future Immg</td>
                     <tr>
                       <?php foreach ($data_from_db as $data): ?>
                       <td class="table-primary">
                        <img width="100" height="100" src="picture/feture_img/<?=$data['img_feature']?>" alt="">
                      </td>

                     <?php endforeach; ?>
                    </tr>
                 </table>
               </div>
             </div>

             <div class="card text-white bg-dark mt-1">
               <div class="card-header text-center">Brand</div>
               <div class="card-body">
                 <form action="protfolio_post.php" method="POST" enctype="multipart/form-data">
                   <div class="mb-3">
                     <div class="mb-3">
                       <label for="disabledTextInput" class="form-label">Disabled input</label>
                       <input disabled type="text" id="disabledTextInput" class="form-control" value="<?=$_SESSION['login_email'];?>">
                     </div>
                     <label for="exampleInputEmail1" class="form-label">Protfolio Title</label>
                     <input type="text" class="form-control" name="protfolio_title" aria-describedby="emailHelp">

                     <label for="exampleInputEmail1" class="form-label">Protfolio Heading</label>
                     <input type="text" class="form-control" name="protfolio_heding" aria-describedby="emailHelp">

                     <label for="exampleInputEmail1" class="form-label">Protfolio Description</label>
                     <input type="text" class="form-control" name="protfolio_decription" aria-describedby="emailHelp">

                     <label for="exampleInputEmail1" class="form-label">Protfolio Thumble Image</label>
                     <input type="file" class="form-control" name="img_thumble" aria-describedby="emailHelp">

                     <label for="exampleInputEmail1" class="form-label">Protfolio Feature Image</label>
                     <input type="file" class="form-control" name="img_feature" aria-describedby="emailHelp">

                     <label for="exampleInputEmail1" class="form-label">Protfolio Feature Descriptionn</label>
                     <input type="text" class="form-control" name="feture_description" aria-describedby="emailHelp">
                   </div>
                   <button type="submit" class="btn btn-primary">Upload Now</button>
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
