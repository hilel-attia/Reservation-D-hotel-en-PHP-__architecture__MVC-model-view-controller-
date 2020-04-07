<?php
require_once __DIR__ . '/connect.php';
class ville extends connect{
	
	public function Liste(){
		$rq = "SELECT * FROM ville";
		return $this->query($rq);
	}
	public function Get($Parmas){
		$rq = "SELECT * FROM ville where id=".$Parmas['id'];
		return $this->query($rq);
	}
	public function Supprimer($Parmas){
		$rq = "DELETE FROM ville where id=".$Parmas['id'];
		return $this->query($rq);
	}
}
?>