
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$idPlanAsig=$_POST['idPlanAsig'];




	        $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idPlanAsig`='$idPlanAsig'";

	        $result2=mysqli_query($conexion,$sql2);
	        while($ver=mysqli_fetch_row($result2)){

	        $r=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];

	        } 

	             
	       

	



	echo $r;


 ?>