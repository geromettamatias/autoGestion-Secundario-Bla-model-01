

<?php


require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$idasignatura=$_POST['idasignatura'];
	$idPersonalasignatura=$_POST['idPersonalasignatura'];
	$cursoAv=$_POST['cursoAv'];
	$asignatiraA=$_POST['asignatiraA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];

	$rad="";
	$dato="";




					
$sql="SELECT * FROM `personalasignatura` WHERE `curso`='$cursoAv' and `asignatura`='$asignatiraA'";

	

$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					 $dato=$ver[1];


		  		}





$sql="SELECT * FROM `datospersonal` WHERE `idPersonal`='$dato'";

	

$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					 $rad="Prof: ".$ver[1]."; DNI: ".$ver[2];


		  		}





  

		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "No hay resultados";
		  }




?>

			