<?php

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$idAsignatura="";



if(!empty($_POST['idAsignatura'])) {

	$idAsignatura=$_POST['idAsignatura'];

		$query ="SELECT * from datosasignatura where idAsignatura='$idAsignatura'";

		

	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die('Query Failed.');
		  }
	

				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
						  

		  }


	echo $datos;
		   
}


?>