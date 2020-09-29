<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();



$r="";


$r.='  <select id="especialidadT" name="especialidadT" class="form-control input-sm">
            
                  <option value="0">----</option>
               ';   

        $sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

             
       

$r.='<option value="'.$ver[7].'">'.$ver[7].'</option>';

    }


 $r.='</select>';



echo $r;

	

 ?>