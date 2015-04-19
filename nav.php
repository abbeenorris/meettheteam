<div class="nav">

    <ul>
            <li><a href="index.php">Home</a></li>
        <li><a href="dayout.php">Day's Out</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="team.php">Meet The Team</a></li>
        <li><a href="submit-day.php">Submit your day out</a></li>

        <?php if(isset($_SESSION["username"])) { ?>
        	<li><a href="logout.php">Logout</a></li>
		<?php } ?>

    </ul>

</div>
