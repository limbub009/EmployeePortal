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
    $role = $_POST['role'];

    if(!empty($username) && !empty($password))
    {
      #save to database
      $user_id = random_num(20);
      $query = "insert into login (user_id, username, password, role) values ('$user_id', '$username', '$password', '$role')";

      mysqli_query($con, $query);

      header("Location: login.php");
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
  <title>Create Account</title>
  <link rel="stylesheet" type="text/css" href="createAccount.css">
  <body>
    <div class="loginbox">
      <img src="./images/avatar.png" class="avatar">
      <h1>Create Account</h1>
      <form method="POST" action="#">
          <p>Choose Username</p>
          <input type="text" STYLE="color: #FFFFFF" name="username" placeholder="Username">

          <p>Choose Password</p>
          <input type="password" STYLE="color: #FFFFFF" name="password" placeholder="Password">

          <p>Role</p>
          <select id="role" name="role">
            <option value="Consultant">Consultant</option>
            <option value="Manager">Manager</option>
            <option value="Support Staff">Support Staff</option>
            <option value="HR Administrator">HR Administrator</option>
          </select>

          <input type="submit" name="" value="Create">

      </form>
    </div>

  </body>

</html>
