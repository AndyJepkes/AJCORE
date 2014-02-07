<?php
// read the post from PayPal system and add 'cmd'
$req = 'cmd=' . urlencode('_notify-validate');
$found = 1;

foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
	
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/cgi-bin/webscr'); //PayPal URL
//curl_setopt($ch, CURLOPT_URL, 'https://www.sandbox.paypal.com/cgi-bin/webscr'); //PayPal TEST URL
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: www.paypal.com'));
$res = curl_exec($ch);
curl_close($ch);

// assign posted variables to local variables
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];


$numVar = "H@ncock1776";
$signInUrl = "http://football.fantasysports.yahoo.com/f1/register/joinleague";
$lID = "365872";

$ln = "\r\n";
$packageBody = $ln.$f_name.$ln.$l_name.$ln.$item_name.$ln.$item_number.$ln.$payment_status.$ln.$payment_amount.$ln.$payment_currency.$ln.$txn_id.$ln.$receiver_email.$ln;

$tester = "This $payer_email that";
$tester2 = "Second test".$payer_email;


if (strcmp ($res, "VERIFIED") == 0) {
	// check the payment_status is Completed
	// check that txn_id has not been previously processed
	// check that receiver_email is your Primary PayPal email
	// check that payment_amount/payment_currency are correct
	// process payment
	// Send mail to customer

	$SendTo = "Team manager <$payer_email>";
	$SubjectLine = "League Registration";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Americalicious <andy@andyjepkes.com>' . "\r\n";

	$a1 = "<h2>Your payment has been verified!</h2>";
	$a3 = "<P>Here is your league ID and password.</p>  <h3>League ID: $lID</h3><h3>Password: $numVar </h3><p>Sign in to <a href=\"$signInUrl\" target=\"_blank\">Yahoo Fantasy Football</a> to complete your registration and add your team to the league.</p>";

	$MsgBody = "
		<html>
			<body>
				$a1 $a3
			</body>
		</html>
	";
	
	$SendToCommish = "Andy <andy@andyjepkes.com>";
	$SubjectLine = "League Registration";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Americalicious <andy@andyjepkes.com>' . "\r\n";
	$CommishMsgBody = "
		<html>
			<body>
				<h2>$payer_email has registered their team to Americalicious!</h2>
				<p>$f_name</p>
				<p>$l_name</p>
				<p>$item_name</p>
				<p>$item_number</p>
				<p>$payment_status</p>
				<p>$payment_amount</p>
				<p>$payment_currency</p>
				<p>$txn_id</p>
				<p>$receiver_email</p>
				<p>$payer_email</p>
			</body>
		</html>
	";

	if ($payment_status == Completed) {
		mail($SendToCommish, $SubjectLine, $CommishMsgBody, $headers);
		mail($SendTo, $SubjectLine, $MsgBody, $headers);
	}
	
}

else if (strcmp ($res, "INVALID") == 0) {
	// log for manual investigation
	mail("andy <andy@andyjepkes.com>", "INVALID!", "A payment confimation was submitted but came back as invalid." . $packageBody, $headers);
}
?>