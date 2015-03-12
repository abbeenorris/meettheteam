<?php 
    
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $location = $_POST["location"];
        $rating = $_POST["rating"];
    } else {
        $name = "";
        $description = ""; 
        $location = ""; 
        $rating = ""; 
    }
    
?>

<?php

    if(isset($_POST["submit"])) {

        //Host
        $host = "localhost"; 
        //User
        $user = "ggriska"; 
        //Password
        $password = "NxS8PjJr0Q8="; 
        //Database name
        $db = "form";  

        $connect = mysqli_connect($host, $user, $password, $db); 

        if(mysqli_connect_errno()) {
            die(mysqli_connect_errno()); 
        }

        $query = "INSERT INTO users (name, description, location, rating) VALUES ('{$name}', '{$description}', '{$location}', '{$rating}')";
        $result = mysqli_query($connect, $query); 

        if($result) {
            $message = "Success";   
        } else {
            $message = "Failed"; 
        }
        
    }

?>


<!doctype html>
<html>
    <head>
        <title>Format Code</title>
        <link href="css/styles.css" rel="stylesheet" >
    </head>
    
    <body>
        <div class="container">  
        	<?php if(isset($_POST["submit"])) { ?>    
	            <p><?php echo $name; ?></p>
	            <p><?php echo $description; ?></p>
	            <p><?php echo $location; ?></p>
	            <p><?php echo $rating; ?></p>
	        <?php } ?>

        </div>
    </body>
</html>

<?php 
    if(isset($_POST["submit"])) {
        mysqli_close($connect);
    }
?>
