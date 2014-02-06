<?php
/**
 * AJ-CORE_v1 
 *
 * 2012 By Andy Jepkes
 * AJ-CORE is a code base for developing dynamic websites.
 * It's free to use. 
 * Please leave these credits in the code.
 *
 */
?>

<?php $userID = $_GET['userID']; ?>

<div id="ajcore-admin">
	<h2>DevMode-..</h2>
	<p class="user">
		Welcome <?php echo $userID; ?>
	</p>
	<div class="site-info">
		<p>AJ-CORE v1.0BETA</p>
		<p><a href="https://docs.google.com/document/d/15LXxXcjZGJXs1Z4nxNIQSPPwvWWP0GOdTzv0Jw64bFY/edit" target="_blank">Site Notes</a></p>
		<p><a href="https://docs.google.com/drawings/d/1RDOSZ-4e5Tt-p5eQlt4WkoFevwIlSaw5RA2e6ABYtm8/edit" target="_blank">jQuery UI Model</a></p>
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