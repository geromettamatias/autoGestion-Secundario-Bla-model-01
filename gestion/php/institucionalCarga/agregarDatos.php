<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
	$cue=$_POST['cue'];
	$domicilio=$_POST['domicilio'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$face=$_POST['face'];
	$modalt=$_POST['modalt'];
	$plan=$_POST['plan'];

	

$sql="INSERT INTO `institucion`(`idInstitucion`, `nombre`, `cue`, `domicilio`, `tel`, `email`, `facebook`, `modalidad`, `planEstudio`) VALUES (null,'$nombre','$cue','$domicilio','$tel','$email','$face','$modalt','$plan')";

echo $result=mysqli_query($conexion,$sql);


	

 ?>