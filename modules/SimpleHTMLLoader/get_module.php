<?php

$type = $_GET['type'];

$array = array(
     '0' => array('fullName' => 'Meni Samet', 'fullAdress' => 'New York, NY'),
     '1' => array('fullName' => 'Test 2', 'fullAdress' => 'Paris'),
);

$html = "<div class=\"spawn\">
			<h2>Had enough?</h2>
		</div>";


if(isset ($_GET['callback'])) {
    header("Content-Type: application/json");
    echo $_GET['callback']."(".json_encode($array).")";
} else {
	header("Content-Type: application/json");
	echo "{[html:".$html."]}";
}




?>