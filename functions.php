<?php
include("connections.php");
#check if the user is already logged in and return their user data (their row in the database)
function check_login($con){
  #check if session value is set
  if(isset($_SESSION['id']))
  {
    $id = $_SESSION['id'];
    $query = "select * from login where id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
  else{
  #elseredirect to login
  header("location: cover.php");
  die; #stop the code here
}
};


#creates a random number for the user id
function random_num($length){
  $text = "";
  if($length < 5){
    $length = 5;
  }

  $len = rand(4, $length);
  for ($i=0; $i < $len; $i++){
    $text .= rand(0,9);
  }
  return $text;
};

// function deletepost($postid){
//   $delete = mysqli_query($con,"delete from feedpost where id = '$postid'"); // delete query
//   if($delete){
//     header('location:dashboard.php');
//     exit;
//   }
//   else{
//     echo "Error deleting post";
//   }
// };

?>

<script>
//FUNCTION TO TOGGLE HIDE/UNHIDE ELEMENTS
function toggleHide(input){
  var myDiv = document.getElementById(input)
  if (myDiv.style.display == "none"){
    myDiv.style.display = "block";
  } else {
    myDiv.style.display = "none";
  }
}

</script>
