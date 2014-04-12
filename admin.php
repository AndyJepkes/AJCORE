<?php
/*************
 * AJ-CORE 
 *************/
?>

<?php $userID = $_GET['userID']; ?>

<div id="ajcore-admin">
	<h2>DevMode-..</h2>
	<p class="user">
		Welcome <?php echo $userID; ?>
	</p>
	<div class="site-info">
		<p>AJ-CORE v1.0BETA</p>
		<p><a href="https://docs.google.com/document/d/1McdwFFcO4v4q5AXgCrt24ktzfUd2SpEQOqbZIYvs164/edit#" target="_blank">Site Notes</a></p>
		<br />
		<hr>
		<p>User Info:</p><br /><br />
		<p>User Name: <?php echo $userID; ?></p>
	</div>
	<div class="toggle-devmode">
		<div class="toggle-devmode-min"></div>
		<div class="toggle-devmode-max"></div>
	</div>
</div>