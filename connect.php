<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "ggriska");
    define("DB_PASS", "NxS8PjJr0Q8=");
    define("DB_NAME", "ggriska");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>
