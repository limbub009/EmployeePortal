<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Employee Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cover.php">Home</a>
        </li>
        <!-- ADD PHP TO MAKE IT VISIBLE ONLY WHEN USER IS LOGGED IN-->
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Your Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="searchIndex.php">Search Employee</a>
        </li>

      </ul>
      <form class="d-flex">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->


          <?php if(!isset($_SESSION['id']) || empty($_SESSION['id'])){ ?>
          <button id="logoutbutton" class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='login.php' style="text-decoration: none; color: white;">LogIn</a></button>

          <?php } else { ?>

          <button id="loginbutton" class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='logout.php' style="text-decoration: none; color: white;">LogOut</a></button>
        <!-- we can do a signIn forum fro admin's eyes only !!! ADD PHP SCRIPT HERE FOR SIGNIN BUTTON!!!-->
          <?php } ?>

        <button class="btn btn-outline-success" type="submit"><a style="text-decoration: none; color: white;" href='createAccount.php'>Create Account</a></button>


      </form>
    </div>
  </div>
</nav>
