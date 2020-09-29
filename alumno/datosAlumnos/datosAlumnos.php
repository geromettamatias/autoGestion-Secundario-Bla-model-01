
<?php 
  

  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();


  session_start();



    $dniLoginT=$_SESSION['dniLoginT'];
    $usuarioA=$_SESSION['usuarioA'];

    $_SESSION['dniLoginT']=$dniLoginT;
    $_SESSION['usuarioA']=$usuarioA;





 ?>

 


    <h4><p style="color:#F4F6F6;"><mark>DATOS</mark></p></h4> 


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        <td>PASS-AUTOGESTIÓN</td>
        <td>CURSO</td>
        <td>Editar</td>

      </tr>

      <?php 





      if ((isset($_SESSION['dniLoginT']))) {


         $dniLoginT=$_SESSION['dniLoginT'];
         $_SESSION['dniLoginT']=$dniLoginT;


            $sql="SELECT * FROM `datosalumnos` WHERE `dniAlumnos`= '$dniLoginT'";


        

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
               $ver[17];
          
        
          
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalInformacionAlumnoAlumno" onclick="InformacionformAlumnoDatosUnicos('<?php echo $datos ?>')"><?php echo $ver[1] ?>
            
          </button></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>

        <td><?php echo $ver[17] ?>--<?php echo $ver[8] ?></td>
        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEDITARALUMNOUNICO" onclick="editarDatosAlumnosUnicos('<?php echo $datos ?>')">
            
          </button>
        </td>
      
      </tr>
      <?php 
    }  }  


       ?>
    </table>
 