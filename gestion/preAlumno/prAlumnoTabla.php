
<?php 
  session_start();
  require_once  "../../libreriasConexion/conexion.php";
 $conexion=conexion();

  

 ?>

 

<div id="conteiner">
<div class="row">
  <div class="col-sm-12"><p>



    <h3><p style="color:#F4F6F6;"><mark>INSC. ALUMNO</mark></p></h3>
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        <td>ORIENTACIÓN</td>
        <td>CURSO</td>
        <td>Agregar</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

      <?php 

       


     


          if ((isset($_SESSION['curso'])) && (isset($_SESSION['curso2']))) {


         $idpC=$_SESSION['curso2'];
             $_SESSION['curso2']=$idpC;

        $idp=$_SESSION['curso'];
             $_SESSION['curso']=$idp;


       if ($idpC==="0") {
         $sql="SELECT * FROM `preinsdatosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";
       }else{


        $sql="SELECT * FROM `preinsdatosalumnos` WHERE (`cursoAlumnos`= '$idpC') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ";

       }

        


     
      }else{


        if(isset($_SESSION['curso'])){


            $idp=$_SESSION['curso'];
             $_SESSION['curso']=$idp;
          
            $sql="SELECT * FROM `preinsdatosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";


          }else{


            $sql="SELECT * FROM `preinsdatosalumnos`";
          }
           }  



                

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
               $ver[14]."||".
               $ver[15]."||".
               $ver[16]."||".
               $ver[17]."||".
               $ver[18]."||".
               $ver[19];
          
        
          
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalInformacionAlumno" onclick="InformacionformAlumnopa('<?php echo $datos ?>')"><?php echo $ver[1] ?>
            
          </button></td>
        <td><?php echo $ver[2] ?></td>

        <td><?php echo $ver[19] ?></td>
        <td><?php echo $ver[8] ?></td>


          <td>
          
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalAsignatura" onclick="preguntarSiagregartpa('<?php echo $datos; ?>')">
          </button>
        
        

        </td>

        
        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionPreAlumno" onclick="agregaformALUtotalEEEpa('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNopa('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
      </tr>
      <?php 
    }


       ?>
    </table>
  </p></div>
</div>
</div>
