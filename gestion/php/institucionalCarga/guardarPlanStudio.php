<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();



	$idInstitucionP=$_POST['idInstitucionP'];
	$idPlanAsig=$_POST['idPlanAsig'];
	$planAño=$_POST['planAño'];
	$planAsignatura=$_POST['planAsignatura'];



	if ($idPlanAsig==="") {

		$sql="INSERT INTO `institucion_plan_estudio`(`idPlanAsig`, `idInstitucion`, `planAño`, `planAsignatura`) VALUES (null,'$idInstitucionP','$planAño','$planAsignatura')";
	
	mysqli_query($conexion,$sql);
		

	}else{

		$sql="UPDATE `institucion_plan_estudio` SET `idPlanAsig`='$idPlanAsig',`idInstitucion`='$idInstitucionP',`planAño`='$planAño',`planAsignatura`='$planAsignatura' WHERE `idPlanAsig`='$idPlanAsig'";
	
	mysqli_query($conexion,$sql);


	}


echo "1";

	

 ?>