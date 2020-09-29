<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();


    session_start();

    $valor2=$_SESSION['BuscarValor'];
    $_SESSION['BuscarValor']=$valor2;




$r="";


$r.=' <table class="table table-secondary  table-hover">
      <tr>
        <td>AÑO</td>
        <td>ASIGNATURA</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
      </tr>';   

        $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

             
    if ($ver[2]==="PRIMER AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }

      }

      $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

    if ($ver[2]==="SEGUNDO AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }


        }

       $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 
        

    if ($ver[2]==="TERCER AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }
        }

            $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 
           
    if ($ver[2]==="CUARTO AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }

        }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

    if ($ver[2]==="QUINTO AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }
    }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

     if ($ver[2]==="SEXTO AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }

    }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 
    if ($ver[2]==="SEPTIMO AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }
    }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

    if ($ver[2]==="BLA I AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }
    }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

    if ($ver[2]==="BLA II AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          } 

    }

           $sql2="SELECT * FROM `institucion_plan_estudio` WHERE `idInstitucion`='$valor2'";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 
            
    if ($ver[2]==="BLA III AÑO") {
              $r.='<tr>
        <td>'.$ver[2].'</td>
        <td>'.$ver[3].'</td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="editarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarPlanEstudioAsignatura2('.$ver[0].')"></button>
        </td></tr>';
          }                 

   }


 $r.='
    </table>';



echo $r;

	

 ?>