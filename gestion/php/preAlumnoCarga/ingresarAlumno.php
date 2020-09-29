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
	$cursoAlumnosU=$_POST['cursoAlumnosU'];
	$nLegajoAlumnoU=$_POST['nLegajoAlumnoU'];

	$legajoSituacionU=$_POST['legajoSituacionU'];
	$nombreTutorU=$_POST['nombreTutorU'];

	$dniTutorU=$_POST['dniTutorU'];
	$TelefonoTutorU=$_POST['TelefonoTutorU'];
	$obserbacionGeneralU=$_POST['obserbacionGeneralU'];

	$passLoginU=$_POST['passLoginU'];
	$situacionAltaU=$_POST['situacionAltaU'];
	$obserbacionAltaU=$_POST['obserbacionAltaU'];

	$añoU=$_POST['añoU'];
	$orientacionU=$_POST['orientacionU'];


	


	$datos="";
	$sql="SELECT * FROM `datosalumnos` WHERE `dniAlumnos`='$dniAlumnosU'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[2];
				}

	if ($datos===$dniAlumnosU) {
		echo "0";
	}else{

		$sql="DELETE FROM `preinsdatosalumnos` WHERE `idAlumnos`='$idAlumnosU'";
	
	
		$result=mysqli_query($conexion,$sql);



		$sql="INSERT INTO `datosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `cursoAlumnos`, `nLegajoAlumno`, `legajoSituacion`, `nombreTutor`, `dniTutor`, `TelefonoTutor`, `obserbacionGeneral`, `passLogin`, `planAñoAlumno`, `especialidadAlumno`) VALUES (null,'$nombreAlumnosU','$dniAlumnosU','$cuilAlumnosU','$domicilioAlumnosU','$emailAlumnosU','$telefonoAlumnosU','$discapasidadAlumnosU','$cursoAlumnosU','$nLegajoAlumnoU','$legajoSituacionU','$nombreTutorU','$dniTutorU','$TelefonoTutorU','$obserbacionGeneralU','$passLoginU','$añoU','$orientacionU')";
		echo $result=mysqli_query($conexion,$sql);


	}

?>