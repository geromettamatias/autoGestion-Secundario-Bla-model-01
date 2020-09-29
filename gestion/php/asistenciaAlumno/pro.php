<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$idAsistencia=$_POST['idAsistencia'];
	$idAlumnosF=$_POST['idAlumnosF'];
	$cantidadF=$_POST['cantidadF'];
	$fechaF=$_POST['fechaF'];
	$justificoF=$_POST['justificoF'];



$query = "SELECT * FROM `asistenciaalumno` WHERE `idAlumnos`='$idAlumnosF' and `fecha`='$fechaF'";


$result = mysqli_query($conexion, $query);
	

		  while($row = mysqli_fetch_array($result)) {
		  	$rad=$row[0];
		  }


if (!empty($rad)) {
		  	echo "0";
		  }else{
		  	
		  



$sql="INSERT INTO `asistenciaalumno`(`idAlumnos`, `cantidad`, `fecha`, `justifico`) VALUES ('$idAlumnosF','$cantidadF','$fechaF','$justificoF')";


	echo $result=mysqli_query($conexion,$sql);
}

 ?>



 