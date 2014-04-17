<?php
/*************
 * AJ-CORE 
 *************/
?>


<?php 
//require_once 'site_settings.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php print ('<title>' . $Settings->SITE_TITLE . '</title>') ?>
<meta charset="utf-8" />

<link rel="shortcut icon" href="images/R.ico" >
<link href="css/AJ_CORE.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<?php echo $Settings->STYLES; ?>

<script src="scripts/user_agent.js" type="text/javascript"></script>

<?php echo $Settings->SCRIPTS; ?>


<!-- Need some logic to insert specific site settings like database credentials and includes -->

<!--[if IE]>

<![endif]-->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35857029-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body class="ajcore">
<?php 
	$userID = $_GET['userID'];
	if ($userID == "admin") {
		include('admin.php');
	}	

  include 'modules/' . $Settings->MODULE->View . '/index.php';
?>

