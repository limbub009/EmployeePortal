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

      $query = "insert into login (username, password, role) values ('$username', '$password', '$role')";
      mysqli_query($con, $query);


      $query = "select * from login where username = '$username' and password = '$password' limit 1";
      $result = mysqli_query($con, $query);

      if($result){
      if($result && mysqli_num_rows($result) > 0){
          $user_data = mysqli_fetch_assoc($result);
          $loginid = $user_data['id'];


          $query2 = "insert into employee (user_id) values ('$loginid')";
          mysqli_query($con, $query2);
          header("Location: cover.php");
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
            <option value="SupportStaff">Support Staff</option>
            <option value="HRAdministrator">HR Administrator</option>
          </select>

          <input type="submit" name="" value="Create">

      </form>
    </div>

  </body>

</html>
