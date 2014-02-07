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
$user="fantasydb987"; ////put DB user name here
$password="FF_9far@nd@WAY";  ////put DB password here
$database="fantasydb987"; ////put DB name here
$dbaddress= "fantasydb987.db.4166774.hostedresource.com";////put DB address here.  You might be able to use "localhost" as the address

  $FName=$_POST['FName'];
  $LName=$_POST['LName'];
  $Email=$_POST['Email'];
  $gender=$_POST['gender'];
  $dobMonth=$_POST['dobMonth'];
  $dobDay=$_POST['dobDay'];
  $dobYear=$_POST['dobYear'];

mysql_connect($dbaddress,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query1= "SELECT * FROM user_accounts";
$result=mysql_query($query1);
$num=mysql_num_rows($result);
mysql_close();

$i=0;
$lastID=0;
$emailOpen=true;

while ($i < $num) {
	$ID=mysql_result($result,$i,"U_ID");
	$emailCheck=mysql_result($result,$i,"Email");
	if ($emailCheck!= $Email) {
		if ($ID >= $lastID) {
			$lastID = $ID;
		}
	}
	if ($emailCheck== $Email) {
	echo '<p class="red">!!!This email address already has an account associated with it!!!</p>';
	$emailOpen=false;
	$i = $num;
	}
	$i++;
}

$U_ID=($lastID + 1);
if ($emailOpen==true) {
	echo '<p>Your account has been created. Check your email.</p>';
	echo 'Your user ID is ' . $U_ID;
}
?>

<?php
mysql_connect($dbaddress,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

	$query2 = "INSERT INTO user_accounts VALUES ('". $U_ID ."','" .$FName. "','" .$LName. "','" .$Email. "','" .$gender. "','" .$dobMonth. "','" .$dobDay. "','" .$dobYear."');";
	$query3 = "INSERT INTO user_progress VALUES ('". $U_ID ."','0');";
if ($emailOpen==true) {
	mysql_query($query2);
	mysql_query($query3);
}
mysql_close();
?>

<?php 
// Send mail to customer
$SendTo =      "$FName<$Email>";
$SubjectLine = "Welcome to Get Know-How";
// Build Message Body from Web Form Input
$MsgBody .= "Your account has been created. You can now sign in and start building new skill sets to help you rule the world.";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Get Know-How <acedafunk@hotmail.com>' . "\r\n";
mail($SendTo, $SubjectLine, $MsgBody, $headers);
// send mail to Admin
$SendAdminTo =      "Andy <acedafunk@gmail.com>";
$SubjectAdminLine = "User Added to Get Know-How";
// Build Message Body from Web Form Input  
   $MsgAdminBody .= "
   <center><p> <font size='6'><strong>New User addded to Get Know-How</strong></font></p></center><br><br>
   
   First: <font size='3'><strong>$FName</strong></font><br>
   Last: <font size='3'><strong>$LName</strong></font><br>
   gender: <font size='3'><strong>$gender</strong></font><br>
   Email: <font size='3'><strong><a href='mailto:$Email'> $Email</a></strong></font><br>
   Date Created: <font size='3'><strong>$date_created </strong></font><br> 
   Date Modified: <font size='3'><strong>$date_modified</strong></font><br>   
   ";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Get Know-How <andy@acedafunk@hotmail.com>' . "\r\n";
mail($SendAdminTo, $SubjectAdminLine, $MsgAdminBody, $headers);
?>

<div class="confirmation">

<p><a href="http://www.andyjepkes.com/Projects/GetKnowHow">Go back to Get Know-How</a></p>
<hr />
<?php 
echo  $FName . " ";
echo  $LName . "<br />";
echo  $Email . "<br />";
echo  $gender . "<br />";
echo  $dobMonth . "/";
echo  $dobDay . "/";
echo  $dobYear;
?>
</div>