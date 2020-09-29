<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idInstitucion=$_POST['idInstitucion'];
	$nombreU=$_POST['nombreU'];
	$cueU=$_POST['cueU'];
	$domicilioU=$_POST['domicilioU'];
	$telU=$_POST['telU'];
	$emailU=$_POST['emailU'];
	$faceU=$_POST['faceU'];
	$modaltU=$_POST['modaltU'];
	$planU=$_POST['planU'];


	$sql="UPDATE `institucion` SET `idInstitucion`='$idInstitucion',`nombre`='$nombreU',`cue`='$cueU',`domicilio`='$domicilioU',`tel`='$telU',`email`='$emailU',`facebook`='$faceU',`modalidad`='$modaltU',`planEstudio`='$planU' WHERE `idInstitucion`='$idInstitucion'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
