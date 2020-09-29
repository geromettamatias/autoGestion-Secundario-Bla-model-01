<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$especialidadT=$_POST['especialidadT'];

$r="";


$r.='  <select id="especialidadT2" name="especialidadT2" class="form-control input-sm">
            
                  <option value="'.$especialidadT.'">'.$especialidadT.'</option>
               ';   

        $sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

             
       

$r.='<option value="'.$ver[7].'">'.$ver[7].'</option>';

    }


 $r.='</select>';



echo $r;

	

 ?>