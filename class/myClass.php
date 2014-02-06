<?php
	include_once 'info.php';
	
	
	class myClass {
		public $value = '<br />In the class';
		

		public function getSome() {
			$info = new info();	
			echo '<br /> In the myClass function';
			echo $this->value;
			echo $info->getInfo();
		}
	}
?>