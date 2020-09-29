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






$sql="UPDATE `notaalumno` SET `idNota`='$idNotaCalificacion',`idAlumnos`='$idAlumnoCalificacion',`idAsignaturas`='$idAsignaturasCalificacion',`nota1tr`='$trimestre1Calificacion',`nota2tr`='$trimestre2Calificacion',`nota3tr`='$trimestre3Calificacion',`integrador`='$integradorCalificacion',`diciembre`='$diciembreCalificacion',`marzo`='$marzoCalificacion',`notaFinal`='$CalificacionfinalAsignauraCalificacion' WHERE `idNota`='$idNotaCalificacion'";

	echo $result=mysqli_query($conexion,$sql);
	



 ?>