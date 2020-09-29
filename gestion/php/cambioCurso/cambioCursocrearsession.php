<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['BuscarValorcambioCurso']=$idper;

	echo $idper;
	


 ?>