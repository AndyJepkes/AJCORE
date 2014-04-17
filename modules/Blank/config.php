<?php
/**
 * Cafe Zuri 2012
 *
 * Module settings are used for including files and settings specific to your module. 
 * Modules can be thought of like a WordPress theme. 
 * If the code you're writting can be used with other websites using AJCore put it in higher level core files.
 * 
 *
 */
?>

<?php
//Should we call this file a manifest?

	class Module {
		public $ScriptIncludes = array(
			"jQuery" => "scripts/jquery-1.7.2.min.js",
			'UI' => "AJ_UI/scripts/AJ_UI.js",
			'easing' => "scripts/jquery.easing.1.3.js"
			);

		public $StyleIncludes = array(
			'style' => "css/style.css",
			'UI' => "AJ_UI/css/UI.css"
			);
	}

?>