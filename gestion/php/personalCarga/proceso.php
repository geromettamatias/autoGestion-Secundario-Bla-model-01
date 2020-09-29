

<?php
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
$da1="";
$TotalHora=0;

$query = "SELECT * from `personalasignatura` ";


if(!empty($_POST['da1'])) {
	
		$da1=$_POST["da1"];
		$datosTotal=$_POST["da1"];
		
		$query ="SELECT * from personalasignatura where idPersonal='$da1'";

		

}	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die('Query Failed.');
		  }
		  $rad='<table class="table table-dark  table-hover">
    
      <tr>
        <td>Curso</td>
        <td>Asignatura</td>
        <td>H-Cat.</td>
        <td>EDITAR.</td>
        <td>ELIMI.</td>
        
      </tr>';


				while($ver=mysqli_fetch_row($result)){ 

					$datos1=$ver[0];
					$datos3=$ver[2];
					$datos4=$ver[3];
					$datos5=$ver[4];

					$TotalHora=$datos5+$TotalHora;
				
						  
		  	$rad.="<tr>
		  				<td>".$ver[2]."</td>
		  				<td>".$ver[3]."</td>
		  				<td>".$ver[4]."</td>



		  				<td>
						<button class='btn btn-warning glyphicon glyphicon-pencil' 
						onclick='editarAsignaturaTotalPLANTEL(".$ver[0].")'>
						
					</button>
				</td>

		  	<td>
					<button class='btn btn-danger glyphicon glyphicon-remove' 
					onclick='preguntarSiNouraAsignatPLANTEL(".$ver[0].")'>
						
					</button>
				</td>


		  	</tr>";

		  }


		  $rad.='</table>

		  Total de Horas = '.$TotalHora.'

		  ';

		  

		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "No hay resultados";
		  }

		   

?>

			