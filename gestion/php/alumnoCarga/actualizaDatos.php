<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAlumnosU=$_POST['idAlumnosU'];
	$nombreAlumnosU=$_POST['nombreAlumnosU'];
	$dniAlumnosU=$_POST['dniAlumnosU'];
	$cuilAlumnosU=$_POST['cuilAlumnosU'];
	$domicilioAlumnosU=$_POST['domicilioAlumnosU'];
	$emailAlumnosU=$_POST['emailAlumnosU'];

	$telefonoAlumnosU=$_POST['telefonoAlumnosU'];
	$discapasidadAlumnosU=$_POST['discapasidadAlumnosU'];
	$nLegajoAlumnoU=$_POST['nLegajoAlumnoU'];

	$legajoSituacionU=$_POST['legajoSituacionU'];
	$nombreTutorU=$_POST['nombreTutorU'];

	$dniTutorU=$_POST['dniTutorU'];
	$TelefonoTutorU=$_POST['TelefonoTutorU'];
	$obserbacionGeneralU=$_POST['obserbacionGeneralU'];

	$sql="UPDATE `datosalumnos` SET `idAlumnos`='$idAlumnosU',`nombreAlumnos`='$nombreAlumnosU',`dniAlumnos`='$dniAlumnosU',`cuilAlumnos`='$cuilAlumnosU',`domicilioAlumnos`='$domicilioAlumnosU',`emailAlumnos`='$emailAlumnosU',`telefonoAlumnos`='$telefonoAlumnosU',`discapasidadAlumnos`='$discapasidadAlumnosU',`nLegajoAlumno`='$nLegajoAlumnoU',`legajoSituacion`='$legajoSituacionU',`nombreTutor`='$nombreTutorU',`dniTutor`='$dniTutorU',`TelefonoTutor`='$TelefonoTutorU',`obserbacionGeneral`='$obserbacionGeneralU' WHERE `idAlumnos`='$idAlumnosU'";
	echo $result=mysqli_query($conexion,$sql);


	


 ?>