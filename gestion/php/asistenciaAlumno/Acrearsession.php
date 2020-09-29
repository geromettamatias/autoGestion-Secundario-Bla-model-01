<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['BuscarValorAsist']=$idper;

	echo $idper;
	


 ?>