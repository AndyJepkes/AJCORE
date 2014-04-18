<?php
class User {
	public $ID;
	
	public function getUser($req) {
		$this->ID = isset($req->params['userID'])
			? $req->params['userID']
			: "Public user";
	}
}
$_user = new User;
$_user->getUser($CurrentRequest);
?>