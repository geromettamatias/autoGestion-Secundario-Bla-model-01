<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idasignatura=$_POST['idasignatura'];
	$idPersonalasignatura=$_POST['idPersonalasignatura'];
	$cursoAv=$_POST['cursoAv'];
	$asignatiraA=$_POST['asignatiraA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];

$datos="";
	$sql="SELECT * FROM `personalasignatura` WHERE `curso`='$cursoAv' and `asignatura`='$asignatiraA'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[3];
				}

	if ($datos===$asignatiraA) {


		echo "0";

		
	}else{



$sql="INSERT INTO `personalasignatura` (`idAsignatura`, `idPersonal`, `curso`, `asignatura`, `horasCatedras`) VALUES (NULL, '$idPersonalasignatura','$cursoAv','$asignatiraA','$horasCatedrasA')";

	echo $result=mysqli_query($conexion,$sql);
	}


 ?>