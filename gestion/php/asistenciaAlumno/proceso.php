
<?php
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$da1="";
$TotalHora=0;

$query = "SELECT * from `asistenciaalumno` ";


if(!empty($_POST['da1']) && !empty($_POST['da2'] )) {
	
		$da1=$_POST["da1"];
		$datosTotal=$_POST["da1"];

		$da2=$_POST["da2"];
		$datosTotal2=$_POST["da2"];
		
		$query ="SELECT * FROM `asistenciaalumno` WHERE `idAlumnos`='$da1' and `fecha`LIKE '%$da2%'";

		

}else{




		if(!empty($_POST['da1'])) {
			
				$da1=$_POST["da1"];
				$datosTotal=$_POST["da1"];
				
				$query ="SELECT * from asistenciaalumno where idAlumnos='$da1'";

		}

}

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die('Query Failed.');
		  }
		  $rad='<table class="table table-dark  table-hover">
    
      <tr>
        <td>Inasistencia</td>
        <td>Fecha</td>
        <td>Justifico</td>
        
      </tr>';


				while($ver=mysqli_fetch_row($result)){ 

					$datos1=$ver[0];
					$datos3=$ver[2];
					$datos4=$ver[3];
					$datos5=$ver[4];

					$TotalHora=$datos3+$TotalHora;
				
						  
		  	$rad.="<tr>
		  				<td><button class='btn btn-warning glyphicon glyphicon-pencil' 
						onclick='editarInasistenciaAsistencia(".$ver[0].")'></button>"." ".$ver[2]."</td>
		  				<td>".$ver[3]."</td>
		  				<td>".$ver[4]." "."<button class='btn btn-danger glyphicon glyphicon-remove' 
					onclick='preguntarSiNourainasistenciaAsistencia(".$ver[0].")'>
						
					</button></td>

		  	</tr>";

		  }


		  $rad.='</table>

		  Total de Inasistencias = '.$TotalHora.'

		  ';

		  

		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "No hay resultados";
		  }

		   

?>

			