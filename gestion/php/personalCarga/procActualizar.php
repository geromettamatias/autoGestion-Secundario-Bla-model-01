<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idasignatura=$_POST['idasignatura'];
	$idPersonalasignatura=$_POST['idPersonalasignatura'];
	$cursoAv=$_POST['cursoAv'];
	$asignatiraA=$_POST['asignatiraA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];


	$sql="UPDATE `personalasignatura` SET `idPersonal`='$idPersonalasignatura',`curso`='$cursoAv',`asignatura`='$asignatiraA',`horasCatedras`='$horasCatedrasA' WHERE `idAsignatura`='$idasignatura'";
	echo $result=mysqli_query($conexion,$sql);

 ?>