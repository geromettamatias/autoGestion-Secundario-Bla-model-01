

<?php 

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$datos="";




if (!empty($_POST['da1'])) { // <= false

$continente=$_POST['da1'];
    // No está vacía (true)







$sql="SELECT * FROM `datoscurso` WHERE `curso`='$continente'";
$result=mysqli_query($conexion,$sql);
	while ($ver=mysqli_fetch_row($result)) {
			$datos=$ver[0];
	 
		}
$sql="SELECT * FROM `datosasignatura` WHERE `idCurso`='$datos'";



	$result=mysqli_query($conexion,$sql);

	$cadena=" 
			<select id='asignatiraA' name='asignatiraA' class='form-control input-sm'>
			<option value='0'>Seleccione una Asignatura</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[2].'>'.$ver[2].'</option>';
	}

	$res= $cadena."</select>";

	echo $res;


} else {

   

$sql="SELECT * FROM `datosasignatura`";



	$result=mysqli_query($conexion,$sql);

	$cadena=" 
			<select id='asignatiraA' name='asignatiraA' class='form-control input-sm'>
			<option value='0'>Seleccione una Asignatura</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[2].'>'.$ver[2].'</option>';
	}

	$res= $cadena."</select>";

	echo $res;


}

	
 ?>

