<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$añoT=$_POST['añoT'];
	$espesialidadTotoal=$_POST['espesialidadTotoal'];



	$r="<select id='cursoAlumnosCcambioCursoTOTAL' name='cursoAlumnosCcambioCursoTOTAL' class='form-control input-sm'><option value='0'>Seleccione un Curso</option>";


     $sql="SELECT * FROM `datoscurso` WHERE `año`='$añoT' and `especialidadT`='$espesialidadTotoal'";
       

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $r.=" <option value='".$ver[1]."'>".$ver[1]."</option>";


            }

            $r.="</select>";


            echo $r;


 ?>

 