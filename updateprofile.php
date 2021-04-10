<?php

 session_start();
 include("connections.php");
 include("functions.php");

 echo $_SESSION['id'];

 $username = $_POST['name'];
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $deptid=$_POST['deptid'];



    $select= "select * from employee where user_id='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['user_id'];
    echo $row['user_id'];
    echo $res;
    if($res === $id)
    {

       $update = "update employee set name='$name',email='$email',phone='$phone', departmentid = '$deptid' where user_id='$id'";
       $sql2 = mysqli_query($con,$update);


if($sql2)
       {
              header('location:dashboard.php');
       }
       else
       {
              /*failed*/
       }
    }
    else
    {
        /*failed*/
    }
 }
?>
