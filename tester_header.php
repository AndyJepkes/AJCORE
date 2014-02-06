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


<?php 
require_once 'site_settings.php'; 
$Settings = new SiteSettings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php echo '<title>', $Settings->SITE_TITLE, '</title>' ?>
<meta charset="utf-8" />

<link rel="shortcut icon" href="favicon.ico" >
<link href="css/AJ_CORE.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<?php $Settings->IncludeStyles(); ?>

<script src="scripts/user_agent.js" type="text/javascript"></script>
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<?php $Settings->IncludeScripts(); ?>


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

  include 'content/' . $Settings->MODULE_NAME . '/tester_index.php';
?>

</body>
</html>