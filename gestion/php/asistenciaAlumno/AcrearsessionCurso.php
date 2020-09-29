<?php 
	session_start();

	$idper2=$_POST['valor2'];

	$_SESSION['BuscarCursoAsist']=$idper2;

	echo $idper2;

 ?>