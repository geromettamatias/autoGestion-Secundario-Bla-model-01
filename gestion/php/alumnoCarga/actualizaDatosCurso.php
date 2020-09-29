<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAlumnosC=$_POST['idAlumnosC'];
	
	$cursoAlumnosU=$_POST['cursoAlumnosU'];
	$planAñoAlumnoU=$_POST['planAñoAlumnoU'];
	$especialidadAlumnoU=$_POST['especialidadAlumnoU'];


	$sql="UPDATE `datosalumnos` SET `cursoAlumnos`='$cursoAlumnosU',`planAñoAlumno`='$planAñoAlumnoU',`especialidadAlumno`='$especialidadAlumnoU' WHERE `idAlumnos`='$idAlumnosC'";
	echo $result=mysqli_query($conexion,$sql);


	


 ?>