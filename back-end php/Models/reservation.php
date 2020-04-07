<?php
require_once __DIR__ . '/connect.php';
class reservation extends connect{
	
	public function Liste(){
		$rq = "SELECT * FROM reservation";
		return $this->query($rq);
	}
	public function Get($Parmas){
		$rq = "SELECT * FROM reservation where id=".$Parmas['id'];
		return $this->query($rq);
	}
	public function Supprimer($Parmas){
		$rq = "DELETE FROM reservation  where id=".$Parmas['id'];
		return $this->execute($rq);
	}
}
?>