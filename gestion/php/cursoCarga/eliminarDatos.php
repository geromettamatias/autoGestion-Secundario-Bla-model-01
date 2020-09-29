
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCurso=$_POST['idCurso'];


	$sql="DELETE from datoscurso where idCurso='$idCurso'";
	
	$result=mysqli_query($conexion,$sql);

	
	$sql="DELETE from datosasignatura where idCurso='$idCurso'";
	echo $result=mysqli_query($conexion,$sql);
 ?>