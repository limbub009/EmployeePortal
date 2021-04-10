<?php

 session_start();
 include("connections.php");
 include("functions.php");

 echo $_SESSION['id']; //get current user id

 $username = $_POST['name'];
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $deptid=$_POST['deptid'];

    $select= "select * from employee where user_id='$id'";
    $sqlquery = mysqli_query($con,$select);

    $rowselect = mysqli_fetch_assoc($sqlquery);
    $result= $rowselect['user_id'];

    echo $rowselect['user_id'];
    echo $result;

    if($result === $id)
    {

       $update = "update employee set name='$name',email='$email',phone='$phone', departmentid = '$deptid' where user_id='$id'";
       $sqlquery2 = mysqli_query($con,$update);


       if($sqlquery2)
       {
              header('location:dashboard.php');
       }
     }
    else
    {
        echo "failed";
    }
 }
?>
