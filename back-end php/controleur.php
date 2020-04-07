<?php
session_start();
if(!isset($_SESSION["id"]))
	header("Location:login.php");

var_dump($_SESSION);
exit;
$message="";
if(count($_POST)>0) 
{
	require_once 'Models/admin.php';
	$Admin = new Admin();
	$row = $Admin->GetAdmin($_POST);
	if(count($row)>0) 
	{
		$_SESSION["id"] = $row['id'];
		$_SESSION["name"] = $row['pass'];
	} 
	else 
	{
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["id"])) 
{
	header("Location:index.php");
}
include 'Views/login.php';

?>