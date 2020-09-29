<?php 
	session_start();

	$idperppp=$_POST['cursoAlumnosty'];
	$_SESSION['cursoAlumnosty']=$idperppp;

	echo $idperppp;


 ?>