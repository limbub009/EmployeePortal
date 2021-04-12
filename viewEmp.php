<!doctype html>
<?php
session_start();
error_reporting(0);
include("connections.php");
include("functions.php");
$user_data = check_login($con);
?>


<html>
<head>
    <title>VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="viewEmp.css">
</head>


<body>
  <div>
    <div class="main">
        <div>
          <a href="searchindex.php"><button>< Back</button></a>
        </div>

        <div class="image">
            <?php if(isset($_GET['searchname'])) {
            $userData = getUsersData($con, $_GET['searchname']);
            ?>
            <img src = empIcon.png>
        </div>
        <div className="info">
            <div class="row topCard">
                <div class="col-sm-6 top">
                    <p>Name</p>
                    <h6><?php echo $userData['name']; ?></h6>
                </div>
                <div class="col-sm-6 top">
                    <p>Department</p>
                    <h6><?php echo $userData['departmentid']; ?></h6>
                </div>
            </div>
            <div class="row bottomCard">
                <div class="col-sm-6 bottom">
                    <p>Email</p>
                    <h6><?php echo $userData['email']; ?></h6>
                </div>
                <div class="col-sm-6 bottom">
                    <p>Phone</p>
                    <h6><?php echo $userData['phone']; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
  </div>
</body>
