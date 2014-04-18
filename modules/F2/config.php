<?php
	class Module {
		public $Name = "F2";
		public $Path = "F2"; // Path to the module
		public $View = "F2"; // View is at the root of this module
		

		public $ScriptIncludes = array(
			"jQuery" => "js/jquery.min.js"
			);

		public $StyleIncludes = array(
			'jQUI' => "./css/smoothness/jquery-ui-1.8.22.custom.css",
			"bootstrap" => "./css/bootstrap.min.css?v2.1.1",
			"container" => "./css/container.css"
			);
	}

?>