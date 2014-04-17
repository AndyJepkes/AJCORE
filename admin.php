<?php
/*************
 * AJ-CORE 
 *************/
?>

<?php $userID = $_GET['userID']; ?>
<div class="toggle-devmode">
		<div class="toggle-devmode-min"></div>
		<div class="toggle-devmode-max"></div>
		<p class="user">
			Welcome <?php echo $userID; ?>
		</p>
</div>
<div id="ajcore-admin" class="">
	<h2>DevMode-..</h2>
	
	<div class="site-info">
		<p>AJ-CORE v1.0BETA</p>
		<p><a href="https://docs.google.com/document/d/1McdwFFcO4v4q5AXgCrt24ktzfUd2SpEQOqbZIYvs164/edit#" target="_blank">Site Notes</a></p>
		<br />
		<hr>
		<p>User Name: <?php echo $userID; ?></p>
	</div>
	
	<!-- Load flowchart -->
	<div style="width: 480px; height: 500px; margin: auto; position: relative;"><iframe frameborder="0" style="width:480px; height:500px" src="https://www.lucidchart.com/documents/embeddedchart/81333c75-d816-4126-a6f5-74928c1c7d5a"></iframe><a href="https://www.lucidchart.com/pages/examples/mind_mapping_software" style="margin: 0; padding: 0; border: none; display: inline-block; position: absolute; bottom: 5px; left: 5px;"><img alt="mind mapping software"title="Lucidchart online diagrams"style="width: 100px; height: 30px; margin: 0; padding: 0; border-image: none; border: none; display: block"src="https://www.lucidchart.com/img/diagrams-lucidchart.png"/></a></div>
</div>
<script src="scripts/admin.js" type="text/javascript"></script>