<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'frontend/tienda-vista.php';
}else{
	header ('location: login.php');
}  
?>