<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	
	$idAsistencia=$_POST['idAsistencia'];
	$idAlumnosF=$_POST['idAlumnosF'];
	$cantidadF=$_POST['cantidadF'];
	$fechaF=$_POST['fechaF'];
	$justificoF=$_POST['justificoF'];


	$sql="UPDATE `asistenciaalumno` SET `idAsistencia`='$idAsistencia',`idAlumnos`='$idAlumnosF',`cantidad`='$cantidadF',`fecha`='$fechaF',`justifico`='$justificoF' WHERE `idAsistencia`='$idAsistencia'";
	echo $result=mysqli_query($conexion,$sql);

 ?>