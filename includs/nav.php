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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand btn btn-outline-Dark" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link btn btn-outline-secondary" aria-current="page" href="userfrom.php">User From</a>
        </li>
        <li class="nav-item  me-3">
          <a class="nav-link btn btn-outline-info" href="brands.php">Brands</a>
        </li>
            <li><a class="dropdown-item btn btn-outline-info" href="setings.php">Setings</a></li>
            <li><a class="dropdown-item btn btn-outline-Primary" href="contuct_mesege.php">Contuct Messege</a></li>
            <li><a class="dropdown-item btn btn-outline-Primary" href="protfolio.php">Protfolio</a></li>
        <li class="nav-item me-3">
          <a class="btn btn-outline-primary" href="change_password.php">Profile</a>
        </li>
        <li class="nav-item me-3">
          <a class="btn btn-outline-primary" href="index.php">My Site</a>
        </li>
        <?php if(!isset($_SESSION['login_status'])){?>
          <li class="nav-item me-3">
            <a class="nav-link btn btn-outline-danger outline-text-white" href="login.php">Login</a>
          </li>
        <?php } ?>
        <li class="nav-item me-3">
          <a class="nav-link btn btn-outline-success" href="log_out.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
