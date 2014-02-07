<?php
/**
 * Americalicious Fantasy Football League - est. 2008
 */
?>
<?php include('header.php'); ?>

<body class="ajcore2colhdrftr">

<div id="container">
	<div id="header">
		<h1>Fantasy Football 2012</h1>
		</div><!-- end #header -->

	<?php include('sidebar1.php'); ?>
	<?php include('sidebar2.php'); ?>

	<?php
	$test = false;
	if (test == true) {
		//echo('Fart');
		$payer_email = "andy@andyjepkes.com";
 		//echo($payer_email);
		$numVar = "H@ncock1776";
		$signInUrl = "http://football.fantasysports.yahoo.com/f1/register/joinleague";
		$lID = "365872";

		
		$SendTo =      "Andy <$payer_email>";
		$SubjectLine = "League Registration";
		// Build Message Body from Web Form Input
		//$MsgBody = "What" . $ln . "the" . $ln . "hell";
		//$MsgBody .= $a1.$ln.$a2;
		//$MsgBody .= "Your payment has been verified! \n Here is your league ID and password. Sign in to <a href=\"$signInUrl\" target=\"_blank\">Yahoo Fantasy Football</a> to complete your registration and add your team to the league. </br></br> League ID: $lID \r Password: $numVar </br></br> If you have any trouble getting signed in feel free to email me or give me a call. </br></br> Andy </br> League Commissioner </br> (720)217-6017 </br> andy@andyjepkes.com";
		$SendToCommish = "Andy <andy@andyjepkes.com>";
		$CommishMsgBody = "$payer_email has registered their team to Americalicious!</br> $payer_email";
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Americalicious <andy@andyjepkes.com>' . "\r\n";
		
		echo $MsgBody;

		//mail($SendTo, $SubjectLine, $MsgBody, $headers);
		//mail($SendToCommish, $SubjectLine, $CommishMsgBody, $headers);
	}


	?>

	<div id="mainContent">
		<p>Welcome to the league! An email has been sent to you with your league ID and password.</p>

	</div> <!-- end #mainContent -->
	<?php include('footer.php'); ?>
</body>
</html>