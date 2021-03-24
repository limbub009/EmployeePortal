<?php
session_start();

  include("connections.php");
  include("functions.php");

  #CHECK IF USER CLICKED 'POST'
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    #something was POSTed
    #collect userdata from post variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
      #read from database
      $query = "select * from login where username = '$username' limit 1";

      $result = mysqli_query($con, $query);

      if($result){
      if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] === $password){
              #if user exists and password matches up, log in. start a session with the user id and redirect to dashboard.
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: dashboard.html");
              die;
            }
          }
      }
    }
    else{
      echo "Please fill in all the fields";
    }
  }


?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <body>
    <div class="loginbox">
      <img src="./images/avatar.png" class="avatar">
      <h1>FDM Login</h1>
      <form method="POST" action="#">
          <p>Username</p>
          <input type="text" name="username" placeholder="Username">

          <p>Password</p>
          <input type="password" name="password" placeholder="Password">

          <input type="submit" name="" value="Login">

          <br>
          <br>

          <a href="#">Forgot Password</a>
      </form>
    </div>

  </body>

</html>
