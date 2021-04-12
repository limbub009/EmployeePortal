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
    $body = str_replace("'","\'",$body);
    $body = str_replace('"', '\"',$body);
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

  $empdata = emp_data($con);

?>
<html>
<head>
  <title>DASHBOARD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>

<body>
  <header>
    <?php include('navbar.php'); ?>
  </header>




  <div class = "row row1">
            <div class="col-sm-6 info dashboardbox">
                <h3>Profile</h3>
                <div id="profilelayout">
                <img src="./images/avatar2.jpg" height="90px" width="85px"/>
                <ul>
                    <li>
                        Name:
                        <?php
                        if(isset($empdata['name'])){
                        echo $empdata['name'];
                        }
                        ?>
                    </li>
                    <li>
                        Email:
                        <?php
                        if(isset($empdata['name'])){
                        echo $empdata['email'];
                        }
                        ?>
                    </li>
                </ul>
                </div>
              <button class="btn btn-outline-success" type="submit" style="margin-right: 7%;"><a href='editprofile.php' style="text-decoration: none; color: black;">Edit Profile</a></button>
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


                      $empname_query = "select name FROM employee WHERE user_id = '$postuserid' limit 1";
                      $empname_result = mysqli_query($con, $empname_query);
                      $emp_name = "";
                      if($empname_result){
                        if($empname_result && mysqli_num_rows($empname_result) > 0){
                          $empname_data = mysqli_fetch_assoc($empname_result);

                          $emp_name = $empname_data['name'];
                        }
                      }




                      #REPLACE user id WITH EMPLOYEE NAME
                      $post .= "<div style='margin: 1%; background: rgba(115, 115, 115, 0.1); padding: 0.5em; margin-left: 0em;'>
                      <h4 style='text-align: left; border-bottom: solid; border-width: 1px; border-color: lightgrey;'>$title</h4>
                      <h5>$emp_name</h5>
                      <h6 style='text-align: left; border-bottom: solid; border-width: 1px; border-color: lightgrey;'>$date</h6>
                      <p style='overflow-y: scroll; word-break: break-word; font-size: 0.8em'>$body</p>
                      ";


                       if($_SESSION['id'] == $postuserid){
                         $post .= "
                         <form action='dashboard.php' method='POST'>
                         <input type=hidden name='postidinput' value='$postid' >
                         <input type='submit' name='deletepost' value='delete'
                         style='font-size: 0.5em; border: none; color: red; background-color: white;'>
                         </form>
                         ";
                       }
                       $post .= "</div>";
                    }
                    echo $post;
                  } else{
                    echo "No posts";
                  }
                  ?>

                </article>
                  <button style="border: none; margin: 1em; font-size: 0.5em;" onclick="toggleHide('postfeedform')">Add Post</button>

                    <form method="POST" action="#" id="postfeedform" style="display:none; width: 100%;">
                        <p>Title</p>
                        <input type="text" name="title" placeholder="Title"
                        STYLE="padding: 1em; color: black; text-align: left; border: none; border-width: 1px; background-color: lightgrey; width: 100%; height: 3em; font-size: 0.8em;">

                        <p>Body</p>
                        <textarea name="body" placeholder="Body"
                        STYLE="overflow-y: scroll; word-break: break-word; padding: 1em;
                        color: black; text-align: left; border: none;
                        border-width: 1px; background-color: lightgrey;
                        width: 100%; height: 10em; font-size: 0.8em;"></textarea>
                        <br>
                        <input style="font-size: 0.5em;border: none; margin: 1em;"type="submit" name="submitpost" value="Post">
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
