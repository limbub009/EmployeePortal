<?php
session_start();
error_reporting(0);

  include("connections.php");
  include("functions.php");

  #CHECK IF USER CLICKED 'POST' (submitted login details)
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    #something was POSTed
    #collect userdata from post variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
      #read from database IF both username and password are not empty

      #create a query variable (just a string)
      $query = "select * from login where username = '$username' limit 1";

      #pass the string query into the sql query, searching if username exists
      $result = mysqli_query($con, $query);

      #if query done successfully:
      if($result){ #if > 0 rows were found with that username
      if($result && mysqli_num_rows($result) > 0){
            #collect the user data (database row) corresponding to the username from the query
            $user_data = mysqli_fetch_assoc($result);
            #check if password for that username matches the user input
            if($user_data['password'] === $password){
              #if user exists and password matches up, log in. start a session with the user id and redirect to dashboard.
              $_SESSION['id'] = $user_data['id']; #session id = user id (database primary key)
              header("Location: dashboard.php");
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
