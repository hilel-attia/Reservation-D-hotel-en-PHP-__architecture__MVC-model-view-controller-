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
		public function insert($params){
		
		$rq = "insert into reservation  (`nom`, `prenom`, `adresse`, `tel`, `email`, `debut`, `fin`) values('".$params['nom']."','".$params['prenom']."','".$params['adresse']."','".$params['tel']."','".$params['email']."','".$params['debut']."','".$params['fin']."')";
		//echo $rq;
		return $this->execute($rq);
	  
		
	}
	
}
?>