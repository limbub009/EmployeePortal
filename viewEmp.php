<!doctype html>
<?php
session_start();
include("connections.php");
include("functions.php");
?>
<html>
<head>
    <title>VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="viewEmp.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Employee Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="linksnav" class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Search Employee</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn btn-outline-success" type="submit" style="margin-right: 10%;">LogIn</button>
                    <!-- we can do a signIn forum fro admin's eyes only !!! ADD PHP SCRIPT HERE FOR SIGNIN BUTTON!!!-->
                    <button class="btn btn-outline-success" type="submit">SignIn</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="main">
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
</body>
