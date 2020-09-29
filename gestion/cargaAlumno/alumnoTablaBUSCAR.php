<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<br><br>

<div class="col-sm-12"> 



    <button type="button" class="btn btn-info btn-block" onclick='regresarPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='regresaratras();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>
    
 

</div>



<div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>BUSCAR POR NOMBRE, APELLIDO, DNI</td>
      </tr>

      <tr>
        <td><select id='cursoAvBus' name='cursoAvBus' class='form-control input-sm'>
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
        <td><input type="text" id="busqueda"/></td>
      </tr>
</table>


  <br>
</div>

 
 




  <script type="text/javascript">

    $("#busqueda").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busqueda').val(),
          url:'php/alumnoCarga/crearsession.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });
      });
  
  

  </script>


    <script type="text/javascript">

    $("#cursoAvBus").change(function(){

      cursoAvBus= $('#cursoAvBus').val();

    
        $.ajax({
          type:"post",
          data:'valor2=' + cursoAvBus,
          url:'php/alumnoCarga/crearsessionCurso.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });
      });
  
  

  function regresarPrincipal(){

   busqueda=$('#busqueda').val("");
    cursoAvBus=$('#cursoAvBus').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/alumnoCarga/crearsession.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/alumnoCarga/crearsessionCurso.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });



    menuPrincipal();
  }

  function regresaratras(){

   busqueda=$('#busqueda').val("");
    cursoAvBus=$('#cursoAvBus').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/alumnoCarga/crearsession.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/alumnoCarga/crearsessionCurso.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });

    menuCarga();
  }









  </script>
