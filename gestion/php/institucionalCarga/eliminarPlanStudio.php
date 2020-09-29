
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlanAsig=$_POST['idPlanAsig'];





	$sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idPlanAsig`='$idPlanAsig'";

    $result2=mysqli_query($conexion,$sql2);
    while($ver=mysqli_fetch_row($result2)){ 

    	$resul=$ver[1];


    }






	$sql="DELETE from institucion_plan_estudio where idPlanAsig='$idPlanAsig'";
	
	mysqli_query($conexion,$sql);








	echo $resul;


 ?>