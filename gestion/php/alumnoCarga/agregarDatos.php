<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$nombreAlumnos=$_POST['nombreAlumnos'];
	$dniAlumnos=$_POST['dniAlumnos'];
	$cuilAlumnos=$_POST['cuilAlumnos'];
	$domicilioAlumnos=$_POST['domicilioAlumnos'];
	$emailAlumnos=$_POST['emailAlumnos'];

	$telefonoAlumnos=$_POST['telefonoAlumnos'];
	$discapasidadAlumnos=$_POST['discapasidadAlumnos'];
	$cursoAlumnos=$_POST['cursoAlumnos'];
	$nLegajoAlumno=$_POST['nLegajoAlumno'];

	$legajoSituacion=$_POST['legajoSituacion'];
	$nombreTutor=$_POST['nombreTutor'];

	$dniTutor=$_POST['dniTutor'];
	$TelefonoTutor=$_POST['TelefonoTutor'];
	$obserbacionGeneral=$_POST['obserbacionGeneral'];

	$planAñoAlumno=$_POST['planAñoAlumno'];
	$especialidadAlumno=$_POST['especialidadAlumno'];






	$sql="INSERT INTO `datosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `cursoAlumnos`, `nLegajoAlumno`, `legajoSituacion`, `nombreTutor`, `dniTutor`, `TelefonoTutor`, `obserbacionGeneral`, `planAñoAlumno`, `especialidadAlumno`) VALUES (null,'$nombreAlumnos','$dniAlumnos','$cuilAlumnos','$domicilioAlumnos','$emailAlumnos','$telefonoAlumnos','$discapasidadAlumnos','$cursoAlumnos','$nLegajoAlumno','$legajoSituacion','$nombreTutor','$dniTutor','$TelefonoTutor','$obserbacionGeneral','$planAñoAlumno','$especialidadAlumno')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>