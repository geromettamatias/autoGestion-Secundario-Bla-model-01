<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAsignatura=$_POST['idAsignatura'];

	$sql="DELETE from datosasignatura where idAsignatura='$idAsignatura'";
	echo $result=mysqli_query($conexion,$sql);
 ?>