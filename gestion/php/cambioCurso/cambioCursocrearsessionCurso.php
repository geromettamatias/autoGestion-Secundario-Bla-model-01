<?php 
	session_start();

	$idper2=$_POST['valor2'];

	$_SESSION['BuscarCursocambioCurso']=$idper2;

	echo $idper2;

 ?>