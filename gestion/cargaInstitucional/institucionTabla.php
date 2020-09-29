
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>

<?php 
        $conta=0;
        $datos2="";

        $sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){

      
          $datos2=$ver[0];

                } 

    
       

               
       ?>

       <h3><p style="color:#F4F6F6;"><mark>DATOS INSTITUCIONALES</mark></p></h3>

<caption><button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevo" onclick="AGREGARDAOTOSInstut('<?php echo $datos2 ?>')">Agregar</button>

    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>ORIENTACIÓN</td>
        <td>INSTUTUCIÓN</td>
        <td>CUE</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
        <td>CARGA-ASIG</td>
      </tr>

      <?php 

        
        $sql="SELECT * FROM `institucion`";

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
               $ver[8];

               
       ?>

      <tr>
        <td><?php echo $ver[7] ?></td>
        <td><?php echo $ver[1] ?></td>
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="infoInstutucionPRINCIPIO('<?php echo $ver[0] ?>')">
            
          <?php echo $ver[2] ?></button></td>

    
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformDffinstitucionInstitucion('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTinstituionInstucon('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

         <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalAsigPlanDeEstudio" onclick="cargaAsignaturaT('<?php echo $ver[0] ?>')">
            
          </button>
        </td>






      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>