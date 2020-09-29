<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['BuscarValornotaAlumno']=$idper;

	echo $idper;
	


 ?>