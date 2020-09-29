
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>

<h3><p style="color:#F4F6F6;"><mark>SELECIONE UNA ASIGNATURA</mark></p></h3>

    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Curso</td>
        <td>ASGNATURA</td>

      </tr>

      <?php 

        if(isset($_SESSION['consulta'])){
          if($_SESSION['consulta'] > 0){
            $idp=$_SESSION['consulta'];
            $sql="SELECT * FROM `datoscurso` WHERE `idCurso`='$idp'";
          }else{
            $sql="SELECT * FROM `datoscurso`";
          }
        }else{
          $sql="SELECT * FROM `datoscurso`";
        }

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0];
       ?>

      <tr>
        <td><?php echo $ver[2] ?>--<?php echo $ver[3] ?>--<?php echo $ver[1] ?></td>
        
  
        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal"  onclick="notaAsignatura('<?php echo $datos ?>')">
          </button>
        
        </td>

        
      </tr>
      <?php 
    }
       ?>
    </table>
 </p></div>
</div>