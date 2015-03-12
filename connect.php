<?php 
    //Host
    $host = "localhost"; 
    //User
    $user = "anorris"; 
    //Password
    $password = "6wAdpSKU73c="; 
    //Database name
    $db = "anorris";  

    $connect = mysqli_connect($host, $user, $password, $db); 

    if(mysqli_connect_errno()) {
        die(mysqli_connect_errno()); 
    }
?>
