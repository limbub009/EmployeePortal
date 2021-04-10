<form action="" method="POST">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>

<?php
#my version of search employee
include("connections.php");
include("functions.php");

$search_value = $_POST["search"];

$sql = "select * from employee where name like '%$search_value%'";
$result=$con->query($sql);

$listnames ="";

while($row=$result->fetch_assoc()){
  $empname = $row['name'];

  $listnames .=
  "<form action='' method='POST'>
  <input type='submit' name='employeename' value='$empname'>
  </form>";
}
echo $listnames;


if($_SERVER['REQUEST_METHOD'] == "POST"){
   $foundname = $_POST['employeename'];

   $dataquery = "select * from employee where name = '$foundname' limit 1";
   $result = mysqli_query($con, $dataquery);
   if($result){
     if($result && mysqli_num_rows($result) > 0){
       $emp_data = mysqli_fetch_assoc($result);

       $empname = $emp_data['name'];
       $empemail = $emp_data['email'];
       $empnumber = $emp_data['phone'];
       $empdept = $emp_data['departmentid'];
       echo $empname;
?>
<br>
<?php
       echo $empemail;
?>
<br>
<?php
       echo $empnumber;
?>
<br>
<?php
       echo $empdept;

     }

   }
}
 ?>
