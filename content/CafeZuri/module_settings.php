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

// é = Alt + 130
// © = Alt + 0169

	class Module {
		public $ScriptIncludes = array(
			'twitter' => "scripts/twitter.js",
			'page' => "scripts/zuri.js",
			'UI' => "AJ_UI/scripts/AJ_UI.js",
			'easing' => "scripts/jquery.easing.1.3.js"
			);

		public $StyleIncludes = array(
			'style' => "css/style.css",
			'UI' => "AJ_UI/css/UI.css"
			);
	}

?>