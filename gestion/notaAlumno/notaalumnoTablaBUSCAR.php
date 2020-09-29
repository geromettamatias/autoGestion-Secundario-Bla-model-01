<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<br><br>

<div id="conteinerNOTApERSONA">
<div class="row">



<div class="col-sm-12">


  <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>Buscar por Nombre, Apellido, DNI</td>
      </tr>
      <tr>
        <td><select id='cursoAvBusnotaAlumno' name='cursoAvBusnotaAlumno' class='form-control input-sm'>
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
        <td><input type="text" id="busquedanotaAlumno"/></td>
      </tr>
    </table>



  
</div>

</div>
</div>



  <script type="text/javascript">

    $("#busquedanotaAlumno").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busquedanotaAlumno').val(),
          url:'php/notaAlumno/notaAlumnocrearsession.php',
          success:function(r){
           $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });
      });
  
  

  </script>


    <script type="text/javascript">

    $("#cursoAvBusnotaAlumno").change(function(){

      cursoAvBus= $('#cursoAvBusnotaAlumno').val();

    
        $.ajax({
          type:"post",
          data:'valor2=' + cursoAvBus,
          url:'php/notaAlumno/notaAlumnocrearsessionCurso.php',
          success:function(r){
          $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });
      });
  
  

  function regresarPrincipalnotaAlumno(){

   busqueda=$('#busquedanotaAlumno').val("");
    cursoAvBus=$('#cursoAvBusnotaAlumno').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/notaAlumno/notaAlumnocrearsession.php',
          success:function(r){
           $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/notaAlumno/notaAlumnocrearsessionCurso.php',
          success:function(r){
           $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });



    menuPrincipal();
  }

  function regresaratrasnotaAlumno(){

   busqueda=$('#busquedanotaAlumno').val("");
    cursoAvBus=$('#cursoAvBusnotaAlumno').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/notaAlumno/notaAlumnocrearsession.php',
          success:function(r){
          $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/notaAlumno/notaAlumnocrearsessionCurso.php',
          success:function(r){
          $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });

    menuAuxiliar();
  }







 function recargarTotal(){

   busqueda=$('#busquedanotaAlumno').val("");
    cursoAvBus=$('#cursoAvBusnotaAlumno').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/notaAlumno/notaAlumnocrearsession.php',
          success:function(r){
           $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/notaAlumno/notaAlumnocrearsessionCurso.php',
          success:function(r){
           $('#notaAlumnoTabla').load('notaAlumno/notaalumnoTabla.php');
          }
        });



  }















  </script>

</div>