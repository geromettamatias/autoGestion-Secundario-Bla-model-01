
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>

<h3><p style="color:#F4F6F6;"><mark>CURSOS</mark></p></h3>

<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoCursoCarga" onclick="cargEspecial()">
        Agregar nuevo curso
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Especialidad</td>
        <td>Año</td>
        <td>Curso</td>
        <td>Editar</td>
        <td>Eliminar</td>
        <td>Asignatura</td>
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

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];
       ?>

      <tr>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[1] ?></td>
        
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionCursoCarga" onclick="agregaformCurso('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoCurso('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNombreAsignaturaCursoCarga" onclick="idCursoto('<?php echo $ver[0] ?>')">
          </button>
        
        </td>
      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>