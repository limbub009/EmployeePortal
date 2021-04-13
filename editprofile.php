
<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile </title>

  <link rel="stylesheet" href="editprofile.css">
</head>
<body>
  <div id="editbox">
    <h1 style="color: darkgrey;"> Edit Profile </h1>
  <form action="updateprofile.php" method="post">
     Name: <input type="text" name="name"><br>
     E-mail: <input type="email" name="email"><br>
     Phone: <input type="int" name="phone"><br>
     Dept Id: <input type="int" name="deptid"><br>
     <input type="submit" name="edit">
   </div>
</body>
</html>
