<?php /*** AJ-CORE ***/ ?>
<?php

	// Site settings make it easier to update the rest of your site.
	// Site specific information can be found here.

	

	if (class_exists('SiteSettings') != true) {
		class SiteSettings {

			public $DEFAULT_MODULE = "Blank";
			public $SITE_TITLE;

			public $DB_NAME = "--";
			public $DB_PW = "--"; // What is the secure way to handle this???

			public $FOOTER_TEXT = 'Blank Template ©2014';




			//This should be called directory or converted to a real module paradigm
			//========================= INTERNAL VARS =========================
			public $MODULE_NAME;
			public $SCRIPTS;
			public $STYLES;

			//========================= FUNCTIONS =========================
			public function Init($obj) {
				$this->MODULE_NAME = (!empty($obj->params["module"])
					? $obj->params["module"] 
					: $this->DEFAULT_MODULE
					);
				$this->SITE_TITLE = (!empty($obj->params["module"])
					? $obj->params["module"] 
					: $this->SITE_TITLE
					);

				$configPath = 'modules/'.$this->MODULE_NAME.'/config.php';

				if (file_exists($configPath)) {
					require_once 'modules/'.$this->MODULE_NAME.'/config.php';
					$module = new Module;
					$this->SCRIPTS = $this->IncludeScripts($module);
					$this->STYLES = $this->IncludeStyles($module);
				} else {
					echo "<h2>The module you're trying to access does not have a config.php</h2>";
				}
			}

			public function IncludeScripts($module) {
				$rScripts = [];
				foreach ($module->ScriptIncludes as $value) {
					array_push($rScripts, '<script src="modules/' . $this->MODULE_NAME . '/' . $value . '" type="text/javascript" ></script>');
				}
				return implode ("\n", $rScripts);
			}

			public function IncludeStyles($module) {
				$rStyles = [];
				foreach ($module->StyleIncludes as $value) {
					array_push($rStyles, '<link href="modules/' . $this->MODULE_NAME . '/' . $value . '" rel="stylesheet" type="text/css" >');
				}
				return implode ("\n", $rStyles);
			}
		}

		$Settings = new SiteSettings;
		$Settings->Init($CurrentRequest);
		
	}

?>