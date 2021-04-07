<?php

require ("dbc.php");

function check_login($con){
    #check if session value is set
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "select * from login where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    #redirect to login
    header("location: login.php");
    die; #stop the code here
}

function getUsersData($id){
    $array = array();
    $q = mysqli_query("SELECT * FROM 'employee' WHERE 'user_id' =".$id);
    while($r = mysql_fetch_assoc($q)){
        $array['id'] = $r['id'];
        $array['name'] = $r['name'];
        $array['email'] = $r['email'];
        $array['phone'] = $r['phone'];
        $array['department'] = $r['department'];
    }
    return $array;
}

function getId($username){
    $q = mysqli_query("Select 'user_id' FROM 'employee' WHERE 'username'='".$username."'");
    while($r = mysql_fetch_assoc($q)){
        return $r['id'];
    }
}