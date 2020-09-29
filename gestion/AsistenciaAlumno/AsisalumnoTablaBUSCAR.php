<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<br>

<div id="conteinerASISTENCIAaL">
<div class="row">

<div class="col-sm-12">




    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>Buscar por Nombre, Apellido, DNI </td>

      </tr>

      <tr>
        <td> <select id='cursoAvBusAsist' name='cursoAvBusAsist' class='form-control input-sm'>
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
        <td><input type="text" id="busquedaAsist"/></td>
      
  
      </tr>

      </table>


 </div>
</div>
</div>




  <script type="text/javascript">

    $("#busquedaAsist").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busquedaAsist').val(),
          url:'php/asistenciaAlumno/Acrearsession.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });
      });
  
  

  </script>


    <script type="text/javascript">

    $("#cursoAvBusAsist").change(function(){

      cursoAvBus= $('#cursoAvBusAsist').val();

    
        $.ajax({
          type:"post",
          data:'valor2=' + cursoAvBus,
          url:'php/asistenciaAlumno/AcrearsessionCurso.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });
      });
  
  

  function regresarPrincipalAsiste(){

   busqueda=$('#busquedaAsist').val("");
    cursoAvBus=$('#cursoAvBusAsist').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/asistenciaAlumno/Acrearsession.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/asistenciaAlumno/AcrearsessionCurso.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });



    menuPrincipal();
  }

  function regresaratrasAsiste(){

   busqueda=$('#busquedaAsist').val("");
    cursoAvBus=$('#cursoAvBusAsist').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/asistenciaAlumno/Acrearsession.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/asistenciaAlumno/AcrearsessionCurso.php',
          success:function(r){
           $('#AsisalumnoTabla').load('AsistenciaAlumno/AsisalumnoTabla.php');
          }
        });

    menuAuxiliar();
  }

  </script>

</div>