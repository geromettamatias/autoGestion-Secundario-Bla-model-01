<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAlumnosDATOS=$_POST['idAlumnosDATOS'];
	$nombreAlumnosDATOS=$_POST['nombreAlumnosDATOS'];
	
	$domicilioAlumnosDATOS=$_POST['domicilioAlumnosDATOS'];
	$emailAlumnosDATOS=$_POST['emailAlumnosDATOS'];

	$telefonoAlumnosDATOS=$_POST['telefonoAlumnosDATOS'];
	
	$nombreTutorDATOS=$_POST['nombreTutorDATOS'];

	$dniTutorDATOS=$_POST['dniTutorDATOS'];
	$TelefonoTutorDATOS=$_POST['TelefonoTutorDATOS'];
	$passLoginDATOS=$_POST['passLoginDATOS'];

	$sql="UPDATE `datosalumnos` SET `nombreAlumnos`='$nombreAlumnosDATOS',`domicilioAlumnos`='$domicilioAlumnosDATOS',`emailAlumnos`='$emailAlumnosDATOS',`telefonoAlumnos`='$telefonoAlumnosDATOS',`nombreTutor`='$nombreTutorDATOS',`dniTutor`='$dniTutorDATOS',`TelefonoTutor`='$TelefonoTutorDATOS',`passLogin`='$passLoginDATOS' WHERE `idAlumnos`='$idAlumnosDATOS'";
	echo $result=mysqli_query($conexion,$sql);


 ?>