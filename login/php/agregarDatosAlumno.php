<?php 

	require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$nombreAlumnos=$_POST['nombreAlumnos'];
	$dniAlumnosTA=$_POST['dniAlumnosTA'];
	$cuilAlumnos=$_POST['cuilAlumnos'];
	$domicilioAlumnos=$_POST['domicilioAlumnos'];
	$emailAlumnos=$_POST['emailAlumnos'];
	$telefonoAlumnos=$_POST['telefonoAlumnos'];
	$discapasidadAlumnos=$_POST['discapasidadAlumnos'];
	$cursoAlumnos=$_POST['cursoAlumnos'];
	$nombreTutor=$_POST['nombreTutor'];
	$dniTutor=$_POST['dniTutor'];
	$TelefonoTutor=$_POST['TelefonoTutor'];
	$obserbacionGeneral=$_POST['obserbacionGeneral'];
	$passLogin=$_POST['passLogin'];

	$planAñoAlumnoPRET=$_POST['planAñoAlumnoPRET'];
	$especialidadAlumnoPREtt=$_POST['especialidadAlumnoPREtt'];


	$sql="INSERT INTO `preinsdatosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `cursoAlumnos`, `nombreTutor`, `dniTutor`, `TelefonoTutor`, `obserbacionGeneral`,`passLogin`,`situacionAlta`,`obserbacionAlta`,`lanAñoAlumnoPRET`, `especialidadAlumnoPREtt`) VALUES (null,'$nombreAlumnos','$dniAlumnosTA','$cuilAlumnos','$domicilioAlumnos','$emailAlumnos','$telefonoAlumnos','$discapasidadAlumnos','$cursoAlumnos','$nombreTutor','$dniTutor','$TelefonoTutor','$obserbacionGeneral','$passLogin','Inicio de Tramite','En espera','$planAñoAlumnoPRET','$especialidadAlumnoPREtt')";



	
	echo $result=mysqli_query($conexion,$sql);


	

 ?>