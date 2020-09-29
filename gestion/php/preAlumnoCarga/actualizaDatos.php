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
	$cursoAlumnos2=$_POST['cursoAlumnos2'];
	$nLegajoAlumnoU=$_POST['nLegajoAlumnoU'];
	$legajoSituacionU=$_POST['legajoSituacionU'];
	$nombreTutorU=$_POST['nombreTutorU'];
	$dniTutorU=$_POST['dniTutorU'];
	$TelefonoTutorU=$_POST['TelefonoTutorU'];
	$obserbacionGeneralU=$_POST['obserbacionGeneralU'];
	$passLoginU=$_POST['passLoginU'];
	$situacionAltaU=$_POST['situacionAltaU'];
	$obserbacionAltaU=$_POST['obserbacionAltaU'];

	$lanAñoAlumnoPRET2=$_POST['lanAñoAlumnoPRET2'];
	$especialidadAlumnoPRE2=$_POST['especialidadAlumnoPRE2'];


	$sql="UPDATE `preinsdatosalumnos` SET `idAlumnos`='$idAlumnosU',`nombreAlumnos`='$nombreAlumnosU',`dniAlumnos`='$dniAlumnosU',`cuilAlumnos`='$cuilAlumnosU',`domicilioAlumnos`='$domicilioAlumnosU',`emailAlumnos`='$emailAlumnosU',`telefonoAlumnos`='$telefonoAlumnosU',`discapasidadAlumnos`='$discapasidadAlumnosU',`cursoAlumnos`='$cursoAlumnos2',`nLegajoAlumno`='$nLegajoAlumnoU',`legajoSituacion`='$legajoSituacionU',`nombreTutor`='$nombreTutorU',`dniTutor`='$dniTutorU',`TelefonoTutor`='$TelefonoTutorU',`obserbacionGeneral`='$obserbacionGeneralU',`passLogin`='$passLoginU',`situacionAlta`='$situacionAltaU',`obserbacionAlta`='$obserbacionAltaU',`lanAñoAlumnoPRET`='$lanAñoAlumnoPRET2',`especialidadAlumnoPREtt`='$especialidadAlumnoPRE2' WHERE `idAlumnos`='$idAlumnosU'";
	echo $result=mysqli_query($conexion,$sql);

 ?>