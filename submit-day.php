<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
    if(isset($_POST["submit"])) {

	    $name = $_POST["name"];
        $description = $_POST["description"];
        $location = $_POST["location"];
        $rating = $_POST["rating"];

        if(empty($name)) {
            $message = "Invalid name";
        } else if(empty($description)) {
            $message = "Invalid Description";
        } else if(empty($location)) {
            $message = "Invalid location";
        } else if(empty($rating)) {
            $message = "Please rate your activity";
        } else {
            $query = "INSERT INTO form (name, description, location, rating) VALUES ('{$name}', '{$description}', '{$location}', '{$rating}')";

			$result = mysqli_query($connection, $query);

            if($result) {
                $message = "Your day was added";
            } else {
                $message = "something went wrong";
            }

            $name = "";
            $description = "";
            $location = "";
            $rating = "";

        }

    }
?>

<?php
$query = "SELECT name, description, location, rating FROM form";
$result = mysqli_query($connection, $query);
$rowcount = mysqli_num_rows($result);
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
        
        <div class="title">
            <p>Submit your day out! 
 On this page you can do our job and submit your favourite day out! Please complete the form below and include a price to let our users enjoy your fun filled days out!</p>
        <div class="form">
            <form action="submit-day.php" method="post">
                Please Name activity: <input type="text" name="name" value="" />
                Describe your activity: <input type="text" name="description" value="" />
                Location: <input type="text" name="location" value="" />
                Please rate activity: <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                <input type="submit" name="submit" value="Submit" />
            </form>
              </div> 


              <?php
                    if(isset($message)) {
                        echo $message;
                    }
                ?>

            <div>
                

	            <?php
		        	if ($rowcount > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>

				<div class="day-box">
					<h1><?php echo $row["name"]; ?></h1>
					<p><?php echo $row["description"]; ?></p>
					<p><?php echo $row["location"]; ?></p>
					<p><?php echo $row["rating"]; ?></p>
					<?php if($row["rating"] == 5) { ?>
						<img src="images/stars.jpg">
					<?php } ?>

				</div>


				<?php  }

				} else {
					echo "0 results";
				}

				?>

            </div>

        </div>
    </body>
</html>

