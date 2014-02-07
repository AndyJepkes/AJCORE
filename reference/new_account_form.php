<?php
/*
This is a form to manually start a user account for the Americalicious Fantasy Football site
*/
?>

<div class"body_wrap">
<div class="form_mailing">
<h2>Join Americalicious!</h2>
<p>Fill in the required fields and hit submit to get started!</p>
<a href="http://www.andyjepkes.com/FantasyFootball">Back to Home</a>
<br>
<form action="set_new_account.php" method="post" class="create_user">
    <fieldset>
        <legend>Personal Info</legend>
        <dl>
            <dt><label for="FName">First Name</label></dt>
            <dd><input type="text" name="FName" id="email" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
            <dt><label for="LName">Last Name</label></dt>
            <dd><input type="text" name="LName" id="email" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
            <dt><label for="Email">Email Address:</label></dt>
            <dd><input type="text" name="Email" id="email" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
            <dt><label for="gender">Gender:</label></dt>
            <dd>
                <select size="1" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><label for="dobMonth">Date of Birth:</label></dt>
            <dd>
                <select size="1" name="dobMonth" id="dobMonth">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select size="1" name="dobDay" id="dobDay">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select size="1" name="dobYear" id="dobYear">
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                </select>
            </dd>
        </dl>
    </fieldset>
    <fieldset class="action">
        <input type="submit" name="submit" id="submit" value="Submit" />
    </fieldset>
</form>
</div>
<div class="data_request">
<?php
////***** END OF INPUT FORM  *****/////
?>
<hr>
<?php

////***** Checks the DataBAse for users and prints them on the screen.*****/////

////***** BOF DB Connection to display list on bottom of page *****/////
$user="fantasydb987"; ////put DB user name here
$password="FF_9far@nd@WAY";  ////put DB password here
$database="fantasydb987"; ////put DB name here
$dbaddress= "fantasydb987.db.4166774.hostedresource.com";////put DB address here.  You might be able to use "localhost" as the address

mysql_connect($dbaddress,$user,$password);   
@mysql_select_db($database) or die( "Unable to select database");


  $query="SELECT * FROM user_accounts";
  $result=mysql_query($query);
  $num=mysql_num_rows($result);
  mysql_close();
////***** EOF DB Connection to display list on bottom of page *****///// 

echo "<b><center>Users in Database</center></b><br><br>";
$i=0;
echo "<b>Total Users in DB = </b>" . $num . "<b> Total Users</b><br><br>";

while ($i < $num) {
  $fname=mysql_result($result,$i,"FName");
  $lname=mysql_result($result,$i,"LName");
  $email=mysql_result($result,$i,"Email");
  $U_ID=mysql_result($result,$i,"U_ID");
  echo "<ul><li>". $fname ." ". $lname ."</li><li>". $email ."</li><li>ID: ". $U_ID ."</li></ul><br />";
  $i++;
}

?>
</div>
</div>