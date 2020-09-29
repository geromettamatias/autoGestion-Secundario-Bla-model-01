               
<?php
 require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();
$especialidadAlumnoPREtt=$_POST['especialidadAlumnoPREtt'];

$primero="<select id='especialidadAlumnoPRE2' name='especialidadAlumnoPRE2' class='form-control input-sm'>";
$segundo="";


               
$sql="SELECT * FROM `institucion`";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                           if ($ver[7]===$especialidadAlumnoPREtt) {
                            $primero.="<option value='".$ver[7]."'>".$ver[7]."</option>";
                                              
                          
                
                    }else{
                      $segundo.="<option value='".$ver[7]."'>".$ver[7]."</option>";
                    }




                  }


                  echo $primero.$segundo."</select>"; 



                       ?>

