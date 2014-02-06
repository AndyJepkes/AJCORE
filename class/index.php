<?php 
class myClass1 {
	var $value = 'Andy';

	public function getName($name) {
		echo $name;
	}
}
$local = new myClass1();

include 'myClass.php';
$remote = new myClass();

echo 'Hi ';
$local->getName('Andy');
//echo $remote->value;
$remote->getSome();

?>