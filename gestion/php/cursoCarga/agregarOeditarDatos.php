<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAsignaturaUT=$_POST['idAsignaturaUT'];
	$idCursoUT=$_POST['idCursoUT'];
	$cursoA=$_POST['cursoA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];
	$horarioA=$_POST['horarioA'];




$sql="INSERT INTO `datosasignatura` (`idAsignatura`, `idCurso`, `nombre`, `horaCatedra`, `horario`) VALUES (NULL, '$idCursoUT','$cursoA','$horasCatedrasA','$horarioA')";

	echo $result=mysqli_query($conexion,$sql);
	



 ?>