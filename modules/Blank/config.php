<?php ?>

<?php
	class Module {
		public $Name = "Blank";
		public $Path = "Blank"; // Path to the module
		public $View = "Blank"; // View is at the root of this module
		public $MobileView = "Blank/m";

		public $ScriptIncludes = array(
			"jQuery" => "scripts/jquery-1.7.2.min.js"
			);

		public $StyleIncludes = array(
			'style' => "css/style.css"
			);
	}
?>