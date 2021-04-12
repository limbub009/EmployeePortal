<?php
session_start();
  require_once('DB.php');
  include('connections.php');
  include('functions.php');
  $user_data = check_login($con);

  $db = new DB();
  $data = $db->viewData();

  // var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Live Search</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="searchstyle.css">

<!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="main.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Employee Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <!-- ADD PHP TO MAKE IT VISIBLE ONLY WHEN USER IS LOGGED IN-->
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Your Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">View Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search Employee</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
          <form class="d-flex">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='login.php' style="text-decoration: none; color: white;">LogIn</a></button>
            <!-- we can do a signIn forum fro admin's eyes only !!! ADD PHP SCRIPT HERE FOR SIGNIN BUTTON!!!-->
            <button class="btn btn-outline-success" type="submit"><a style="text-decoration: none; color: white;" href='createAccount.php'>Create Account</a></button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <h1>Live Search</h1>

  <form action="search.php" method="POST">
    <input type="text" name="name" placeholder="Search Here..."
    id="searchBox" oninput=search(this.value)>
  </form>

  <ul id="dataViewer">
  <?php foreach ($data as $i) { ?>
    <li><?php echo $i["name"]; ?></li>
  <?php } ?>
  </ul>

</body>
</html>
