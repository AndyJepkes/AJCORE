
<?php
/* 
// A few helpful things you may consider adding to this class.
// You want to print these out in a debuging module.

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
*/
//print_r ($_SERVER);
//print_r ($_GET);

if (class_exists('Request') != true) {
	class Request 
	{
		public $params;
		
		public function cleanParams() 
		{
			$this->params = $this->clean($_GET);
		}

		function clean($elem) 
		{ 
		    if(!is_array($elem)) 
		        $elem = htmlentities($elem,ENT_QUOTES,"UTF-8"); 
		    else 
		        foreach ($elem as $key => $value) 
		            $elem[$key] = $value; 
		    return $elem; 
		} 
	}

	$CurrentRequest = new Request;
	$CurrentRequest->cleanParams();
}
?>