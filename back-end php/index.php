<?php
session_start();
if(!isset($_SESSION["id"]))
	header("Location:login.php");

$Message = '';
require_once ("models/hotel.php");
$hotel=new hotel;
if(isset($_GET['Action'])){
	// Traitement selon Action 
	if($_GET['Action'] == 'delete'){
		$hotel->Supprimer($_GET);
		$Message = 'Hôtel supprimer';
	}
	elseif($_GET['Action'] == 'confirmUpdate'){
		$hotel->Update($_GET);
		$Message = 'Hôtel modifier';
	}
	elseif($_GET['Action'] == 'update'){
		$row = $hotel->Get($_GET)[0];
		require_once ("models/ville.php");
		$ville = new ville();
		$rowsVille = $ville->liste();
		include 'Views/EditHotel.php';
		exit;
	}
}

$rows=$hotel->liste();
include 'Views/index.php';

?>