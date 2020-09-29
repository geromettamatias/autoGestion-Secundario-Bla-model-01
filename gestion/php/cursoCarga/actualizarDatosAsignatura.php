<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idAsignaturaUT=$_POST['idAsignaturaUT'];
	$idCursoUT=$_POST['idCursoUT'];
	$cursoA=$_POST['cursoA'];
	$horasCatedrasA=$_POST['horasCatedrasA'];
	$horarioA=$_POST['horarioA'];



	$sql="UPDATE `datosasignatura` SET `idAsignatura`='$idAsignaturaUT',`idCurso`='$idCursoUT',`nombre`='$cursoA',`horaCatedra`='$horasCatedrasA',`horario`='$horarioA' WHERE `idAsignatura`='$idAsignaturaUT'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>