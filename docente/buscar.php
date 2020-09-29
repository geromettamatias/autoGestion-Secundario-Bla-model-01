
<select id='cursoAlumnosty' name='cursoAlumnosty' class='form-control input-sm'>
	<option value='0'>Todos los cursos</option>




<?php 
require_once "../libreriasConexion/conexion.php";
	$conexion=conexion();
$sql="SELECT * FROM `datoscurso`";
$result=mysqli_query($conexion,$sql);
	while ($ver=mysqli_fetch_row($result)) {

	?>


		<option value='<?php echo $ver[1] ?>'><?php echo $ver[1] ?></option>';
	

	<?php 
		}
			 ?>