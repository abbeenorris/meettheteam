<php require_once "connect.php"; ?>
<php require_once "submit.php"; ?>

<?php 
    
    if(isset($_POST["submit"])) {
        $name = ucfirst($_POST["name"]);
        $description = ucfirst($_POST["description"]);
        $location = ucfirst($_POST["location"]);
        $rating = ucfirst($_POST["rating"]);
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
        } else if(empty($description)) {
            $message = "Invalid Description";
        } else if(empty($location)) {
            $message = "Invalid location";
        }else if(empty($rating)) {
            $message = "Please rate your activity";
        } else {
            $query = "INSERT INTO users (name, description, location, rating) VALUES ('{$name}', '{$description}', '{$location}', '{$rating}')";
            $result = mysqli_query($connect, $query); 

            if($result) {
                $message = "Success, your post was added";   
            } else {
                $message = "Sorry, something went wrong"; 
            }
            
            $name = "";
            $description = ""; 
            $location = ""; 
            $rating = "";
  
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
</html>

<?php
$servername = "localhost";
$username = "ggriska";
$password = "NxS8PjJr0Q8=";
$dbname = "ggriska";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, description, location, rating FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name of Activity</th><th>Description</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "</td><td>".$row["name"]." ".$row["description"]." " .$row["location"]. "" .$row["rating"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
