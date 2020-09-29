
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idInstitucion=$_POST['idInstitucion'];

	$sql="DELETE from institucion where idInstitucion='$idInstitucion'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>