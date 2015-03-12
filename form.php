<!doctype html>
<html>
    <head>
        <title>Format Code</title>
        <link href="css/styles.css" rel="stylesheet" >
    </head>
    
    <body>
        
       <?php include 'nav.php'; ?> 
        
        <div class="top-title">
                <h1>Submit your day out!</h1>
            </div>
            
        <div class="container">  
            
            <div class="box">
                <?php 
                    if(isset($message)) {
                        echo $message;
                    }
                ?>
            </div>
            
            <form action="form.php" method="post">
                Name: <input type="text" name="name" value="" />
                Description: <input type="text" name="description" value="" />
                Location: <input type="text" name="location" value="" />
                Rating: <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                <input type="submit" name="submit" value="Submit" />
            </form>

        </div>
    </body>
    
    <?php 
    
    if(isset($_POST["submit"])) {
        $name = ucfirst($_POST["name"]);
        $description = ucfirst($_POST["description"]);
        $city = ucfirst($_POST["location"]);
        $gender = ucfirst($_POST["rating"]);
    } else {
        $name = "";
        $description = ""; 
        $location = ""; 
        $rating = ""; 
    }
    
?>

<?php 
    if(isset($_POST["submit"])) {
        
        if(empty($name)) {
            $message = "Invalid name";
        }
    }
?>

</html>
