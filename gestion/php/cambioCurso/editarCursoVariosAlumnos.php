
<?php
//delete.php
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
session_start();
	$añoT=$_SESSION['añoT'];
	$_SESSION['añoT']=$añoT;

	$espesialidadTotoal=$_SESSION['espesialidadTotoal'];
	$_SESSION['espesialidadTotoal']=$espesialidadTotoal;


	$cursoAlumnosCcambioCursoTOTAL=$_SESSION['cursoAlumnosCcambioCursoTOTAL'];
	$_SESSION['cursoAlumnosCcambioCursoTOTAL']=$cursoAlumnosCcambioCursoTOTAL;




if(isset($_POST["id"]))
{
	
	$i=0;
 foreach($_POST["id"] as $id)
 {




 	$sql="UPDATE `datosalumnos` SET `cursoAlumnos`='$cursoAlumnosCcambioCursoTOTAL',`planAñoAlumno`='$añoT',`especialidadAlumno`='$espesialidadTotoal' WHERE `idAlumnos`='$id'";
	mysqli_query($conexion,$sql);

	$sql="DELETE FROM `notaalumno` WHERE `idAlumnos`='$id'";
	mysqli_query($conexion,$sql);


 }
}

echo "1";
?>