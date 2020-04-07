<?php
class connect{

	private $sgbd;
	private $serveur;
	private $dbname;
	private $user;
	private $password;
	private $conexion;
	
    public function __construct(){
		$this->sgbd = 'mysql';
		$this->serveur='localhost';
		$this->dbname='projet';
		$this->user='root';
		$this->password='';
		$this->conexion = new PDO("$this->sgbd:host=$this->serveur;dbname=$this->dbname", "$this->user", "$this->password");
        

    }
	
	public function query($rq){
		$c = $this->conexion->query($rq) ;
		$rows =$c->fetchAll();
		return $rows;
	}
	
	public function execute($rq){
		$c = $this->conexion->query($rq) ;
		return $c;
	}
}

?>