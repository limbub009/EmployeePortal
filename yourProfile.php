<!doctype html>
<?php
session_start();
error_reporting(0);
include("connections.php");
include("functions.php");
$user_data = check_login($con);
$empdata = emp_data($con);
?>


<html>
<head>
    <title>VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="viewEmp.css">
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
</head>


<body>
  <div>
    <div class="main">
        <div>
          <button onclick="goBack()">< Back</button>
        </div>

        <div class="image">
          <figure>
            <img src = empIcon.png>
            <figcaption><h3>Your Profile</h3></figcaption>
          </figure>
        </div>
        <div className="info">
            <div class="row topCard">
                <div class="col-sm-6 top">
                    <p>Name</p>
                    <h6><?php echo $empdata['name']; ?></h6>
                </div>
                <div class="col-sm-6 top">
                    <p>Department</p>
                    <h6><?php echo $empdata['departmentid']; ?></h6>
                </div>
            </div>
            <div class="row bottomCard">
                <div class="col-sm-6 bottom">
                    <p>Email</p>
                    <h6><?php echo $empdata['email']; ?></h6>
                </div>
                <div class="col-sm-6 bottom">
                    <p>Phone</p>
                    <h6><?php echo $empdata['phone']; ?></h6>
                </div>
                <div>
                  <a href="editprofile.php"><button> Edit Profile </button></a>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
