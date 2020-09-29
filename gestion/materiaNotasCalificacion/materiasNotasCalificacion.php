
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    <?php 

        if(isset($_SESSION['BuscarValorMATERIASCali'])){
         
            $MATERIA=$_SESSION['BuscarValorMATERIASCali'];
            $_SESSION['BuscarValorMATERIASCali']=$MATERIA;


            $MATERIAcursi=$_SESSION['BuscarValorMATERIASCaliCurso'];
            $_SESSION['BuscarValorMATERIASCaliCurso']=$MATERIAcursi;


             echo '<h4><p style="color:#F4F6F6;"><mark>CURSO:'.$MATERIAcursi. "<br><br>". "ASIGINATURA: ".$MATERIA.'</mark></p></h4> </p>';
     


      }

    ?>



    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>APELLIDO Y NOMBRE</td>
        <td>DNI</td>
        <td>NOTAS</td>
        <td>EDITAR NOTAS</td>
      </tr>

      <?php


   

            $sql="SELECT * FROM `datosalumnos` WHERE `cursoAlumnos`='$MATERIAcursi'";
         
        
       
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
               $ver[14]."||".$MATERIAcursi."||".$MATERIA;
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        
  
        <td>
          <button class="btn btn-success glyphicon glyphicon-pencil"  onclick="notaAsignaturaMATERIASinfo('<?php echo $datos ?>')">
          </button>
        
        </td>

        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil"   data-toggle="modal" data-target="#modalEdicionNotasCalificacion"  onclick="notaAsignaturaMATERIASeditar('<?php echo $datos ?>')">
          </button>
        
        </td>

        
      </tr>
      <?php

       
    }
       ?>
    </table>
  </p></div>
</div>