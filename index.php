<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<?php if(isset($_SESSION["username"])) { ?>
	<form action="submit-day.php" method="post">
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
	<a href="logout.php">Logout</a>
<?php } else { ?>
	<div class="login-box">
	    <form action="login.php" method="post">
	        <p>Username:</p> <input type="text" name="username" value=""><br>
	        <p>Password:</p> <input type="password" name="password" value=""><br>
	        <input type="submit" name="login" value="Login">
	    </form>
	</div>



	<div class="login-box">
		<h1>Register</h1>
	    <form action="register.php" method="post">
	        <p>Username:</p> <input type="text" name="username" value=""><br>
	        <p>Password:</p> <input type="password" name="password" value=""><br>
	        <input type="submit" name="register" value="Register">
	    </form>
	</div>

<?php } ?>



<?php include_once("../includes/templates/footer.php"); ?>
