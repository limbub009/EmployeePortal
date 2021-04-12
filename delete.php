<?php
include("connections.php");
include("dashboard.php");
//echo $postid;
$deletequery = "delete from feedpost where id = $postid";
$delete = mysqli_query($con,$deletequery); // delete query
if($delete){
  mysqli_close($con);
  header('location:dashboard.php');
  exit;
}
else{
  echo "Error deleting post";
}
 ?>
