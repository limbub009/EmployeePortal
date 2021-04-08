<!doctype html>

<?php
  session_start();
  include("connections.php");
  include("functions.php");
?>


<html lang="en">
  <head>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/dist/js/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include the above in your HEAD tag ---------->
    <link href="viewEmployee.css" rel="stylesheet">
  </head>
  <body>
  <?php
  if(!isset($_GET['searchname']))
  {
  ?>
    <div class="page-content page-container" id="page-content">

        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                <?php if(isset($_GET['searchname'])) {
                                $userData = getUserData(getID($_GET['searchname']))
                                ?>
                                <h6 class="f-w-600"><?php echo $userData['name']; ?></h6>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <div class="row topCard">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400"><?php echo $userData['email']; ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                              <p class="m-b-10 f-w-600">Phone</p>
                                              <h6 class="text-muted f-w-400"><?php echo $userData['number']; ?></h6>
                                        </div>
                                    </div>
                                    <div class="row bottomCard">
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Department</p>
                                          <h6 class="text-muted f-w-400"><?php echo $userData['department']; ?></h6>

                                      </div>
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Job Role</p>
                                          <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                      </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                      <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"
                                             data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook"
                                                                aria-hidden="true"></i></a></li>
                                      <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"
                                             data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a>
                                      </li>
                                      <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                             data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <?php
        }
        }
    ?>
  </body>
</html>
