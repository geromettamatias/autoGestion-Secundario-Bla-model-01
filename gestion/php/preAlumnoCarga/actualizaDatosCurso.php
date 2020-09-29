<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAlumnosC=$_POST['idAlumnosC'];
	
	$cursoAlumnosC=$_POST['cursoAlumnosC'];
	

	$sql="UPDATE `preinsdatosalumnos` SET `cursoAlumnos`='$cursoAlumnosC' WHERE `idAlumnos`='$idAlumnosC'";
	echo $result=mysqli_query($conexion,$sql);


	


 ?>