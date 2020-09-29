<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<br>
<div id="conteiner2">
<div class="row">

<div class="col-sm-12">


  <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>Buscar por Nombre, Apellido, DNI</td>
        
      </tr>
      <tr>
        <td><select id='cursoAvBuscambioCurso' name='cursoAvBuscambioCurso' class='form-control input-sm'>
  <option value='0'>Seleccione un Curso</option>
<?php 

$sql="SELECT * FROM `datoscurso`";
$result=mysqli_query($conexion,$sql);
  while ($ver=mysqli_fetch_row($result)) {

  ?>


    <option value='<?php echo $ver[1] ?>'><?php echo $ver[2] ?>--<?php echo $ver[3] ?>--<?php echo $ver[1] ?></option>';
  

  <?php 
    }
       ?>
     </select></td>

        <td><input type="text" id="busquedacambioCurso"/></td>
      </tr>

    </table>





  
</div>


  </div>
  

</div>




  <script type="text/javascript">

    $("#busquedacambioCurso").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busquedacambioCurso').val(),
          url:'php/cambioCurso/cambioCursocrearsession.php',
          success:function(r){
           $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });
      });
  
  

  </script>


    <script type="text/javascript">

    $("#cursoAvBuscambioCurso").change(function(){

      cursoAvBus= $('#cursoAvBuscambioCurso').val();

    
        $.ajax({
          type:"post",
          data:'valor2=' + cursoAvBus,
          url:'php/cambioCurso/cambioCursocrearsessionCurso.php',
          success:function(r){
          $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });
      });
  
  

  function regresarPrincipalcambioCurso(){

   busqueda=$('#busquedacambioCurso').val("");
    cursoAvBus=$('#cursoAvBuscambioCurso').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/cambioCurso/cambioCursocrearsession.php',
          success:function(r){
           $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/cambioCurso/cambioCursocrearsessionCurso.php',
          success:function(r){
           $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });



    menuPrincipal();
  }

  function regresaratrascambioCurso(){

   busqueda=$('#busquedacambioCurso').val("");
    cursoAvBus=$('#cursoAvBuscambioCurso').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/cambioCurso/cambioCursocrearsession.php',
          success:function(r){
          $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/cambioCurso/cambioCursocrearsessionCurso.php',
          success:function(r){
          $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');
          }
        });

    menuAuxiliar();
  }

  </script>

</div>