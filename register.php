<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //loging to make sure things were valid

        $query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')";

        $result = mysqli_query($connection, $query);

        if($result) {
            $_SESSION["message"] = "Success, you can now login";
        } else {
            $_SESSION["message"] = "sorry something went wrong";
        }

    }

    redirectTo("index.php");

?>
