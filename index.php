<?php /*** AJ-CORE ***/ ?>
<?php

// Authenticate user
// Load user preferences
// URL routing, params, etc
// Site settings
// 	Module name? (override?)
//	DevMode?
// Load header
//	Styles
//	Scripts
// Load body
//	Load modules
$userID = $_GET['userID'];
echo $userID;
include 'request.php';
include 'header.php';

echo "after";

?>
</body>
</html>



