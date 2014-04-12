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

	// Site settings make it easier to update the rest of your site and site specific information can be found in one location

	// é = Alt + 130
	// © = Alt + 0169
	require_once 'modules/Blank/module_config.php';
	if (class_exists('SiteSettings') != true) {
		class SiteSettings {
		
			public $SITE_TITLE = "Blank Template";
			public $BD_NAME = "--";
			public $FOOTER_TEXT = 'Blank Template ©2014';
			//This should be called directory or converted to a real module paradigm
			public $MODULE_NAME = 'Blank';


			//========================= FUNCTIONS =========================


			public function IncludeScripts() {
				$module = new Module();
				foreach ($module->ScriptIncludes as $value) {
					echo '<script src="modules/' . $this->MODULE_NAME . '/' . $value . '" type="text/javascript" ></script>';
				}
				
			}
			public function IncludeStyles() {
				$module = new Module();
				foreach ($module->StyleIncludes as $value) {
					echo '<link href="modules/' . $this->MODULE_NAME . '/' . $value . '" rel="stylesheet" type="text/css" >';
				}
				
			}
		}
	}
?>