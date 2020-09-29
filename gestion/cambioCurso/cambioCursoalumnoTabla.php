
<?php 
  session_start();
  require_once  "../../libreriasConexion/conexion.php";
 $conexion=conexion();

  

 ?>

 

<div id="conteinercAMBI">
<div class="row">
  <div class="col-sm-12">

   
<p>

    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        <td>CURSO</td>
        <td>CLIP</td>
  
      </tr>

      <?php 





      if ((isset($_SESSION['BuscarCursocambioCurso'])) && (isset($_SESSION['BuscarValorcambioCurso']))) {


         $idpC=$_SESSION['BuscarCursocambioCurso'];
             $_SESSION['BuscarCursocambioCurso']=$idpC;

        $idp=$_SESSION['BuscarValorcambioCurso'];
             $_SESSION['BuscarValorcambioCurso']=$idp;


       if ($idpC==="0") {
         $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";
       }else{


        $sql="SELECT * FROM `datosalumnos` WHERE (`cursoAlumnos`= '$idpC') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ";

       }

        


     
      }else{


        if(isset($_SESSION['BuscarValorcambioCurso'])){


            $idp=$_SESSION['BuscarValorcambioCurso'];
             $_SESSION['BuscarValorcambioCurso']=$idp;
          
            $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";


          }else{


            $sql="SELECT * FROM `datosalumnos`";
          }
           }   
           $cont=1;  

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8]."||".
               $ver[9]."||".
               $ver[10]."||".
               $ver[11]."||".
               $ver[12]."||".
               $ver[13]."||".
               $ver[14];
          
        
          $cont=$cont+1;
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionformAsistencia('<?php echo $datos ?>')"><?php echo $ver[1] ?>
            
          </button></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[17] ?>--<?php echo $ver[8] ?></td>
        <td>

          <input type="checkbox" name="customer_id[]" class="delete_customer" value="<?php echo $ver[0]; ?>" />
        </td>
      </tr>
      <?php 
    }


       ?>
    </table>

  
  </p>
  </div>
</div>
</div>


