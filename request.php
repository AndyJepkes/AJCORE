
<?php

class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();

class fo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new fo;
$bar->do_foo();
//$userID = $_GET['userID'];

//if (class_exists('request') != true) {
	
	class Request 
	{
		//public $USER_NAME = "$userID";

		
		public function getuser() 
		{
			echo "user";
			//echo $this->USER_NAME;	
		}
	}

	$myrequest = new Request;
	$myrequest->getuser();
//}





?>