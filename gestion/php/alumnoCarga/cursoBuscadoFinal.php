 <?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();


                  $planAñoAlumnoU=$_POST['planAñoAlumnoU'];
                  $especialidadAlumnoU=$_POST['especialidadAlumnoU'];





                 $res="<div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='cursoAlumnosU'>CURSO</label>
          </div>


                 <select id='cursoAlumnosU' name='cursoAlumnosU' class='form-control input-sm'>
                  <option value='0'>Seleccione un Curso</option>";


$sql="SELECT * FROM `datoscurso` WHERE `año`='$planAñoAlumnoU' and `especialidadT`='$especialidadAlumnoU'";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                    $res.="<option value='".$ver[1]."'>".$ver[1]."</option>";

                    }


                    $res.="</select></div>";


                    echo $res;

                  


                       ?>