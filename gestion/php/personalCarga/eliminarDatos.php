
<?php 
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPersonal=$_POST['idPersonal'];

	$sql="DELETE from datospersonal where idPersonal='$idPersonal'";
	
	$result=mysqli_query($conexion,$sql);

	
	$sql="DELETE from personalasignatura where idPersonal='$idPersonal'";
	echo $result=mysqli_query($conexion,$sql);

 ?>