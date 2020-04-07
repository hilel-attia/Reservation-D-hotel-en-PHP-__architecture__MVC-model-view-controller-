<?php
require_once __DIR__ . '/connect.php';
class admin extends connect{
	
	public function GetAdmin($Params){
		$rq = "SELECT * FROM admin WHERE id='" . $Params["user_name"] . "' and pass = '". $Params["password"]."'" ;
		return $this->query($rq)[0];
	}
}
?>