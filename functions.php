<?php
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
}

function emp_data($con){
  #check if session value is set
  if(isset($_SESSION['id']))
  {
    $id = $_SESSION['id'];
    $query = "select * from employee where user_id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0)
    {
      $emp_data = mysqli_fetch_assoc($result);
      return $emp_data;
    }
  }
  else{
  #elseredirect to login
  header("location: cover.php");
  die; #stop the code here
}
}

function check_admin($con, $user_data){

  if(!empty($user_data['role'])){
    if($user_data['role'] != "Administrator"){
      header("location: cover.php");
    }
  }
  return;
}


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
}

function getUsersData($con, $name)
{
    $query = "SELECT * FROM employee WHERE name ='$name'";
    $result = $con->query($query);
    if ($result && mysqli_num_rows($result) > 0) {

        $data = array();

        //while ($row = mysqli_fetch_assoc($result))
        while ($row = $result->fetch_assoc())
        {
            $data['name'] = $row['name'];
            $data['email'] = $row['email'];
            $data['departmentid'] = $row['departmentid'];
            $data['phone'] = $row['phone'];
        }
        return $data;
   }
}

function getId($username, $con){
    $q = mysqli_query($con, "Select 'user_id' FROM 'employee' WHERE 'username'='".$username."'");
    while($r = mysqli_fetch_assoc($q)){
        return $r['user_id'];
    }
}


function deletepost($pid){
  $deletequery = "delete from feedpost where id = $pid";
  $delete = mysqli_query($con,$deletequery); // delete query
  if($delete){
    mysqli_close($con);
    header('location:dashboard.php');
    exit;
  }
  else{
    echo "Error deleting post";
  }

}

?>

<script>
//FUNCTION TO TOGGLE HIDE/UNHIDE ELEMENTS
function toggleHide(input){
  var myDiv = document.getElementById(input)
  if (myDiv.style.display == "none"){
    myDiv.style.display = "block";
  } else {
    myDiv.style.display = "none";
  };
}

function hideLoginButton(input){
  var mybutton = document.getElementById(input);

  mybutton.style.display = "none";
}


</script>
