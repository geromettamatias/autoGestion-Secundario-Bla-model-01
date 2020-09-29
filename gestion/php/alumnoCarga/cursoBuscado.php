 <?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();


                  $planAñoAlumno=$_POST['planAñoAlumno'];
                  $especialidadAlumno=$_POST['especialidadAlumno'];





                 $res="<div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='cursoAlumnos'>CURSO</label>
          </div>


                 <select id='cursoAlumnos' name='cursoAlumnos' class='form-control input-sm'>
                  <option value='0'>Seleccione un Curso</option>";


$sql="SELECT * FROM `datoscurso` WHERE `año`='$planAñoAlumno' and `especialidadT`='$especialidadAlumno'";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                    $res.="<option value='".$ver[1]."'>".$ver[1]."</option>";

                    }


                    $res.="</select></div>";


                    echo $res;

                  


                       ?>


                

