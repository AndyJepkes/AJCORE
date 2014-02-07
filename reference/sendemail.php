<?php

$name = $_GET['name'];
$email = $_GET['email'];
$comments = $_GET['comments'];

echo "Thanks ", $name, "! Your request has been submitted.\r\nI'll contact you soon about your league password.";
echo "<br /><a href=\"http://www.andyjepkes.com/FantasyFootball\">Go Back</a>";

$commish = "acedafunk@gmail.com";
$SendTo = $commish;
$SubjectLine = "Americalicious - Password request";
$MsgBody .= "Someone is requesting the league password.\r\n Email: ";
$MsgBody .= $email;
$MsgBody .= "\r\n Comments: \r\n";
$MsgBody .= $comments;


mail($commish, $SubjectLine, $MsgBody, "From: Alerts@andyjepkes.com/FantasyFootball.com");
?>