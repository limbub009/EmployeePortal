<?php
session_start();

  include("connections.php");
  include("functions.php");

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
          <input type="text" name="username" placeholder="Username">

          <p>Choose Password</p>
          <input type="password" name="password" placeholder="Password">

          <p>Role</p>
          <select id="role" name="Role">
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
