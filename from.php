<?php
session_start();
require_once 'includs/nav.php';
?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>From Validation</title>
    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
            <div class="card text-white bg-dark mb-3 mt-5">
              <div class="card-header ">Calcuator</div>
              <div class="card-body">
                <?php
                  if(isset($_SESSION['error'])){
                ?>
                <div class="alert alert-danger">
                  <?php
                  foreach($_SESSION['error'] as $errors){
                     echo "<li>".$errors."</li>";
                  }
                  unset($_SESSION['error']);
                  ?>
                </div>
                  <?php } ?>
                <form action="Calculator.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Number One</label>
            <input type="number" name="one"  class="form-control" >

          </div>
          <div class="mb-3">
            <label class="form-label">Number Two</label>
            <input type="number" name="two"  class="form-control" >
          </div>
          <button name="Jog" type="submit" class="btn btn-primary">Jog</button>
          <button name="Biog" type="submit" class="btn btn-secondary">Biog</button>
          <button name="gun" type="submit" class="btn btn-success">Gune</button>
          <button name="vag" type="submit" class="btn btn-warning">Vag</button>
          <button name="vagses" type="submit" class="btn btn-info">Vagses</button>
        </form>
        <?php
          if(isset($_SESSION['result'])){
        ?>

        <div class="alert alert-danger mt-5">
          <?php
            echo $_SESSION['result'];
            unset($_SESSION['result']);
          ?>
        </div>
          <?php } ?>

              </div>
            </div>
          </div>
        </div>
        </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
  </html>
