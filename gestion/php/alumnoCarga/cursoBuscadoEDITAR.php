 <?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();


                  $planAñoAlumnoU=$_POST['planAñoAlumnoU'];
                  $especialidadAlumnoU=$_POST['especialidadAlumnoU'];
                  $curo=$_POST['curo'];

                  $prime="";
                  $prime.="<option value='".$curo."'>".$curo."</option>";

                  $otros="";
              


                 $res="<div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='cursoAlumnosU'>CURSO</label>
          </div>


                 <select id='cursoAlumnosU' name='cursoAlumnosU' class='form-control input-sm'>";


$sql="SELECT * FROM `datoscurso` WHERE `año`='$planAñoAlumnoU' and `especialidadT`='$especialidadAlumnoU'";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                    $cursoDa=$ver[1];

                    if ($curo!==$cursoDa) {
                      $otros.="<option value='".$cursoDa."'>".$cursoDa."</option>";
                    }
              
                    

                    }


                    $res.=$prime.$otros."</select></div>";


                    echo $res;

                  


                       ?>