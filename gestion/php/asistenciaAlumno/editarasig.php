
<?php

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$idAsignatura="";

$idAsignatura=$_POST['idAsignatura'];

$query ="SELECT * FROM `asistenciaalumno` WHERE `idAsistencia`='$idAsignatura'";

		

	

$result = mysqli_query($conexion, $query);

while($ver=mysqli_fetch_row($result)){ 

		$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||"."123";
						  

		  }


	echo $datos;
		   



?>

			