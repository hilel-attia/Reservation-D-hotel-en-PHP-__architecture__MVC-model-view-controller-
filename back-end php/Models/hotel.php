<?php
require_once __DIR__ . '/connect.php';
class hotel extends connect{
	
	public function Liste(){
		$rq = "SELECT hotel.`id`, hotel.`nom`, hotel.`ville`, hotel.`pays`, hotel.`adresse`, hotel.`codepostal`, hotel.`etoile`, hotel.`type`, hotel.`description`, ville.nom as nomVille 
		FROM hotel, ville
		where hotel.ville = ville.id";
		return $this->query($rq);
	}
	public function Get($Parmas){
		$rq = "SELECT * FROM hotel where id=".$Parmas['id'];
		return $this->query($rq);
	}
	public function Supprimer($Parmas){
		$rq = "DELETE FROM hotel where id=".$Parmas['id'];
		return $this->execute($rq);
	}
	public function Update($Parmas){
		$rq = "Update hotel 
		set nom = '".$Parmas['nom']."' ,
		ville = '".$Parmas['ville']."' ,
		codepostal ='".$Parmas['codepostal']."' ,
		type='".$Parmas['type']."' ,
		etoile ='".$Parmas['etoile']."' ,
		description='".$Parmas['description']."' 
		where id=".$Parmas['id'];
		
		return $this->execute($rq);
	}
}
?>