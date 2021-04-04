<?php

require ("dbc.php");

function getUsersData($id){
    $array = array();
    $q = mysqli_query("SELECT * FROM 'users' WHERE 'ID' =".$id);
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
    $q = myswl_query("Select 'id' FROM 'users' WHERE 'username'=".$username"'");
        while($r = mysql_fetch_assoc($q)){
            return $r['id'];
        }
}