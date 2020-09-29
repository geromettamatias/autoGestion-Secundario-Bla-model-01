<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idNotaCalificacion=$_POST['idNotaCalificacion'];
	$idAlumnoCalificacion=$_POST['idAlumnoCalificacion'];
	$idAsignaturasCalificacion=$_POST['idAsignaturasCalificacion'];
	$AsignaturaCuestionCalificacion=$_POST['AsignaturaCuestionCalificacion'];
	$trimestre1Calificacion=$_POST['trimestre1Calificacion'];
	$trimestre2Calificacion=$_POST['trimestre2Calificacion'];
	$trimestre3Calificacion=$_POST['trimestre3Calificacion'];
	$integradorCalificacion=$_POST['integradorCalificacion'];
	$diciembreCalificacion=$_POST['diciembreCalificacion'];
	$marzoCalificacion=$_POST['marzoCalificacion'];
	$CalificacionfinalAsignauraCalificacion=$_POST['CalificacionfinalAsignauraCalificacion'];






$sql="INSERT INTO `notaalumno`(`idNota`, `idAlumnos`, `idAsignaturas`, `nota1tr`, `nota2tr`, `nota3tr`, `integrador`, `diciembre`, `marzo`, `notaFinal`) VALUES ('$idNotaCalificacion','$idAlumnoCalificacion','$idAsignaturasCalificacion','$trimestre1Calificacion','$trimestre2Calificacion','$trimestre3Calificacion','$integradorCalificacion','$diciembreCalificacion','$marzoCalificacion','$CalificacionfinalAsignauraCalificacion')";

	echo $result=mysqli_query($conexion,$sql);
	



 ?>



	

