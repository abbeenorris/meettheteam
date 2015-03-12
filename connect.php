<?php 
    //Host
    $host = "localhost"; 
    //User
    $user = "ggriska"; 
    //Password
    $password = "NxS8PjJr0Q8="; 
    //Database name
    $db = "ggriska";  

    $connect = mysqli_connect($host, $user, $password, $db); 

    if(mysqli_connect_errno()) {
        die(mysqli_connect_errno()); 
    }
    
    echo "conneted successfully";
?>
