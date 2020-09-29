
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>ASGNATURA</td>
        <td>NOTAS</td>
      </tr>

      <?php 



   if(isset($_SESSION['BuscarValorMATERIAS'])){

    $mater=$_SESSION['BuscarValorMATERIAS'];
    $_SESSION['BuscarValorMATERIAS']=$mater;

    $sql="SELECT * FROM `datosasignatura` where `idCurso`='$mater'";

   }else{

            $sql="SELECT * FROM `datosasignatura`";

            }
      
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[1]."||".
                 $ver[2];
       ?>

      <tr>
        <td><?php echo $ver[2] ?></td>
        
  
        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal"  onclick="notaAsignaturaMATERIASCalificacion('<?php echo $datos ?>')">
          </button>
        
        </td>

        
      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>