<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['BuscarValorMATERIAS']=$idper;

	echo $idper;
	


 ?>