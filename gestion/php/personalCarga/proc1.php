<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	

	$idasignatura=$_POST['idasignatura'];
	$idPersonalasignatura=$_POST['idPersonalasignatura'];
	$cursoAv=$_POST['cursoAv'];
	$asignatiraA=$_POST['asignatiraA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];

	

	$sql="INSERT INTO `personalasignatura` (`idAsignatura`, `idPersonal`, `curso`, `asignatura`, `horasCatedras`) VALUES (NULL, '$idPersonalasignatura','$cursoAv','$asignatiraA','$horasCatedrasA')";


	echo $result=mysqli_query($conexion,$sql);

 ?>