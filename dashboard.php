<?php
session_start();

#ADD CHECK LOGIN!!

  include("connections.php");
  include("functions.php");


  $user_data = check_login($con);

  #CHECK IF USER CLICKED 'POST' SUBMIT BUTTON
  if(isset($_POST['submitpost'])){
    #something was POSTed
    #collect userdata from post variable
    $title = $_POST['title'];
    $body = $_POST['body'];
    $userid = $_SESSION['id'];  #sets userid of the post to the session id, which is set to the user's id when they log in, to identify the owner of the post

    if(!empty($title) && !empty($body))
    {
      #save to database
      $query = "insert into feedpost (userid, title, body) values ('$userid', '$title', '$body')";  #timestamp automatically added by the db?

      mysqli_query($con, $query);

      #header("Location: login.php");
    }
    else{
      echo "Please fill in all the fields";
    }
  }

  if(isset($_POST['deletepost'])){
    $id_to_delete = $_POST['postidinput'];
    $deletequery = "delete from feedpost where id = $id_to_delete";
    $delete = mysqli_query($con,$deletequery); // delete query
    if($delete){
      mysqli_close($con);
      header('location:dashboard.php');
      exit;
    }
    else{
      echo "Error deleting post";
    }
  }

?>
<html>
<head>
  <title>DASHBOARD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
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
            <button class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='login.php'>Log In</a></button>
            <button class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='logout.php'>Log Out</a></button>
            <!-- we can do a signIn forum fro admin's eyes only !!! ADD PHP SCRIPT HERE FOR SIGNIN BUTTON!!!-->
            <button class="btn btn-outline-success" type="submit">SignIn</button>
          </form>
        </div>
      </div>
    </nav>
  </header>




  <div class = "row row1">
            <div class="col-sm-6 info dashboardbox">
                <h3>Profile</h3>
                <div id="profilelayout">
                <img src="./images/avatar2.jpg" height="90px" width="85px"/>
                <ul>
                    <li>
                        Username:
                    </li>
                    <li>
                        Email:
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-4 tasks dashboardbox">
                <h3>Tasks</h3>
                <ul>
                    <li>
                        hkasklsa
                    </li>
                    <li>
                        nas;jvs;a
                    </li>
                    <li>
                        ck as;vsa
                    </li>
                    <li>
                        lkjsv ;as
                    </li>
                </ul>
            </div>
        </div>
        <div class = "row row2">
            <div id="feed" class="col-sm-6 feed dashboardbox" style="overflow-y: scroll; padding-top: 0em;">
                <h3 style="position: sticky; top: 0; padding: 2em; background-color: white; margin-top: 0em; padding: 1em;">Feed</h3>
                <article id="postcontainer">

                  <?php
                  $postsquery = "SELECT * FROM feedpost ORDER BY date DESC";
                  $postsresult = mysqli_query($con, $postsquery);
                  $numposts = mysqli_num_rows($postsresult);

                  $post = "";

                  if($numposts > 0){

                    while($row = mysqli_fetch_assoc($postsresult)){
                      $title = $row['title'];
                      $body = $row['body'];
                      $date = $row['date'];
                      $postuserid = $row['userid'];
                      $postid = $row['id'];

                      #REPLACE user id WITH EMPLOYEE NAME
                      $post .= "<div style='background: rgba(115, 115, 115, 0.1); padding: 0.5em; margin-left: 0em;'>
                      <h4 style='text-align: left; border-bottom: solid; border-width: 1px; border-color: lightgrey;'>$title</h2>
                      <h6>$date</h3>
                      <p style='font-size: 0.8em'>$body</p>
                      ";


                       if($_SESSION['id'] == $postuserid){
                         $post .= "
                         <form action='dashboard.php' method='POST'>
                         <input type=hidden name='postidinput' value='$postid' >
                         <input type='submit' name='deletepost' value='delete'>
                         </form>;
                         ";
                       };
                       $post .= "</div>";
                    }
                    echo $post;
                  } else{
                    echo "No posts";
                  }
                  ?>

                </article>
                  <button style="border: none; margin: 1em;" onclick="toggleHide('postfeedform')">Add Post</button>

                    <form method="POST" action="#" id="postfeedform" style="display:none">
                        <p>Title</p>
                        <input type="text" STYLE="color: black" name="title" placeholder="Title">

                        <p>Body</p>
                        <input type="text" STYLE="color: black" name="body" placeholder="Body">
                        <br>
                        <input type="submit" name="submitpost" value="Post">
                    </form>

            </div>
            <div class="col-sm-4 deptInfo dashboardbox">
                <h3>Department Information</h3>
                <ul class="dptLst">
                    <li>
                        Department Information:
                    </li>
                    <li>
                        Department Name:
                    </li>
                    <li>
                        Department ID:
                    </li>
                    <li>
                        Department Manager:
                    </li>
                </ul>
            </div>
        </div>
</body>

</html>
