 <select id='especialidadAlumnoPRE' name='especialidadAlumnoPRE' class='form-control input-sm'>
                 <option value='0'>Seleccione una Orientación</option>

<?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();


               
$sql="SELECT * FROM `institucion`";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                                     
                       ?>

                       <option value='<?php echo $ver[7]; ?>'><?php echo $ver[7] ?></option>

                       

              <?php
                
                    }
                       ?>

</select>