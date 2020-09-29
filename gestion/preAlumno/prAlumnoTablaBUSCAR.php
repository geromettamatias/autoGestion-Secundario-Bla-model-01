<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<div class="col-12">


  <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>Buscar por Nombre, Apellido, DNI</td>
 
      </tr>

      <tr>
        <td><select id='cursoAvBuspa' name='cursoAvBuspa' class='form-control input-sm'>
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
        <td><input type="text" id="busquedapa"/></td>

      </tr>
    </table>


  
</div>



  

  
  

  <script type="text/javascript">

    $("#busquedapa").keyup(function(){

            $.ajax({
          type:"post",
          data:'valor=' + $('#busquedapa').val(),
          url:'php/preAlumnoCarga/crearsession.php',
          success:function(r){
            $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });
      });
  
       $("#cursoAvBuspa").change(function(){

        
        $.ajax({
          type:"post",
          data:'valor2=' + $('#cursoAvBuspa').val(),
           url:'php/preAlumnoCarga/crearsession2.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });
      });









       function regresarPrincipalpa(){

   busquedapa=$('#busquedapa').val("");
    cursoAvBuspa=$('#cursoAvBuspa').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/preAlumnoCarga/crearsession.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/preAlumnoCarga/crearsession2.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });



    menuPrincipal();
  }

  function regresaratraspa(){

   busquedapa=$('#busquedapa').val("");
    cursoAvBuspa=$('#cursoAvBuspa').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/preAlumnoCarga/crearsession.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/preAlumnoCarga/crearsession2.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });

    menuCarga();
  }



  function RecargarBuscadoresPreInscAlumno(){

   busquedapa=$('#busquedapa').val("");
    cursoAvBuspa=$('#cursoAvBuspa').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/preAlumnoCarga/crearsession.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/preAlumnoCarga/crearsession2.php',
          success:function(r){
           $('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
          }
        });



  }








  </script>