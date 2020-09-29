<?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();

                  session_start();


                  $planAñoAlumnoPRET=$_SESSION['lanAñoAlumnoPRET2'];
                  $_SESSION['lanAñoAlumnoPRET2']=$planAñoAlumnoPRET;

                 $especialidadAlumnoPREtt=$_SESSION['especialidadAlumnoPRE2'];
                  $_SESSION['especialidadAlumnoPRE2']=$especialidadAlumnoPREtt;
           


                 $res="<div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='cursoAlumnos2'>CURSO</label>
          </div>


                 <select id='cursoAlumnos2' name='cursoAlumnos2' class='form-control input-sm'>
                 <option value='0'>Seleccione una Orientación</option>";


$sql="SELECT * FROM `datoscurso` WHERE `año`='$planAñoAlumnoPRET' AND  `especialidadT`='$especialidadAlumnoPREtt'";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                
                      $res.="<option value='".$ver[1]."'>".$ver[1]."</option>";
                    
              
                    
                    }


                    $res.="</select></div>";


                    echo $res;

                  


                       ?>