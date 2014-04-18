<?php /*** AJ-CORE ***/ ?>
<?php

// URL routing, params, etc
// Authenticate user
// Load user preferences
// Site settings
// 	Module select? (override?)
//	DevMode?
// Load header
//	Styles
//	Scripts
// Load body
//	Load modules

$perfTest = false;
if ($perfTest) { include 'util/perf_test.php'; } //$perfTest->perfLoadTest(9);


include 'request.php';
include 'user.php';
include 'site_settings.php';
include 'header.php'; // Header needs to be rboken out into logical steps.


if ($perfTest) { echo "PHP time to serve: " . round($perfTest->perfTimeFromInclude(), 4) . "s\n"; }
?>
</body>
</html>



