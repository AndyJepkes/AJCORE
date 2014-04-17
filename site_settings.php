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
			public $MODULE;
			public $SCRIPTS;
			public $STYLES;
			public $DEVICE_TYPE;

			//========================= FUNCTIONS =========================
			public function Init($obj) {
				$this->DEVICE_TYPE = $this->getClientType();
				$this->MODULE = $this->selectModule();
				$this->selectView();
				$this->SITE_TITLE = $this->MODULE->Name;
				$this->SCRIPTS = $this->includeScripts($this->MODULE->ScriptIncludes);
				$this->STYLES = $this->includeStyles($this->MODULE->StyleIncludes);
			}

			public function selectModule() {
				// We can over ride the default module with the module param
				$mPath = (!empty($obj->params["module"])
					? $obj->params["module"] 
					: $this->DEFAULT_MODULE
					);

				if (file_exists($this->getPath($mPath))) {
					require_once $this->getPath($mPath);
					return new Module;
				} else {
					echo "<h2>The module you're trying to access does not have a config.php</h2>";
					require_once $this->getPath($this->DEFAULT_MODULE);
					return new Module;
				}
			}

			public function getPath($path) {
				return 'modules/'.$path.'/config.php';
			}

			public function selectView() {
				if ($this->DEVICE_TYPE == 'tablet' || $this->DEVICE_TYPE == 'phone') {
					if (isset($this->MODULE->MobileView)) {
						$this->MODULE->View = $this->MODULE->MobileView;
					}
				}
			}

			public function getClientType() {
				require_once 'libs/MobileDetect/Mobile_Detect.php';
				$detect = new Mobile_Detect;
				return ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
			}

			public function includeScripts($scripts) {
				$rScripts = [];
				foreach ($scripts as $value) {
					array_push($rScripts, '<script src="modules/' . $this->MODULE->Path . '/' . $value . '" type="text/javascript" ></script>');
				}
				return implode ("\n", $rScripts);
			}

			public function includeStyles($styles) {
				$rStyles = [];
				foreach ($styles as $value) {
					array_push($rStyles, '<link href="modules/' . $this->MODULE->Path . '/' . $value . '" rel="stylesheet" type="text/css" >');
				}
				return implode ("\n", $rStyles);
			}
		}

		$Settings = new SiteSettings;
		$Settings->Init($CurrentRequest);
		
	}

?>