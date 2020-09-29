<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAsignatura=$_POST['idAsignatura'];

	$sql="DELETE FROM `asistenciaalumno` WHERE `idAsistencia`='$idAsignatura'";
	echo $result=mysqli_query($conexion,$sql);
 ?>