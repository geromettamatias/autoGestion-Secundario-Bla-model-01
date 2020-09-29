<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCurso=$_POST['idCurso'];
	$p=$_POST['curso'];
	$a=$_POST['año'];
	$s=$_POST['especialidadT2'];




	$sql="UPDATE datoscurso set curso='$p', año='$a', especialidadT='$s'
				where idCurso='$idCurso'";
	echo $result=mysqli_query($conexion,$sql);

 ?>