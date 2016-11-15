<?php
?>

<?php
	class Module {
		public $Name = "SimpleHTMLLoader";
		public $Path = "SimpleHTMLLoader"; // Path to the module
		public $View = "SimpleHTMLLoader"; // View is at the root of this module
		public $MobileView = "SimpleHTMLLoader/m";

		public $ScriptIncludes = array(
			"jQuery" => "scripts/jquery-2.1.0.min.js",
			"loadModules" => "scripts/load_modules.js"
			);

		public $StyleIncludes = array(
			'style' => "css/style.css"
			);
	}
?>