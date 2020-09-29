<?php 
	session_start();

	$idper2=$_POST['valor2'];

	$_SESSION['BuscarCursonotaAlumno']=$idper2;

	echo $idper2;

 ?>