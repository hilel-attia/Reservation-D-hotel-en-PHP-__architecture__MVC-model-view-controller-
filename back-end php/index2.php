<?php
session_start();
if(!isset($_SESSION["id"]))
	header("Location:login.php");


$Message = '';
require_once ("models/reservation.php");
$reservation=new reservation;
if(isset($_GET['Action'])){
	// Traitement selon Action 
	if($_GET['Action'] == 'delete'){
		$reservation->Supprimer($_GET);
		$Message = 'reservation supprimer';

	}
}

$rows=$reservation->liste();
include 'Views/index2.php';

?>