<div id="conteinerEDITARCURSOS">
<div class="row">


  <div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>CORRESPONDE A</td>
        <td>ORIENTACION</td>
        <td>CURSO</td>
        <td>EDITAR</td>
      </tr>

       <tr>
        <td><select id="añoT" class='form-control input-sm'>
            
                  <option value="0">----</option>
                 <option value="PRIMER AÑO">"PRIMER AÑO"</option>
                  <option value="SEGUNDO AÑO">"SEGUNDO AÑO"</option>
                  <option value="TERCER AÑO">"TERCER AÑO"</option>
                  <option value="CUARTO AÑO">"CUARTO AÑO"</option>
                  <option value="QUINTO AÑO">"QUINTO AÑO"</option>
                  <option value="SEXTO AÑO">"SEXTO AÑO"</option>
                  <option value="SEPTIMO AÑO">"SEPTIMO AÑO"</option>
                  <option value="BLA I AÑO">"BLA I"</option>
                  <option value="BLA II AÑO">"BLA II"</option>
                  <option value="BLA II AÑO">"BLA III"</option>
                </select></td>
        <td><select id='espesialidadTotoal' name='espesialidadTotoal' class='form-control input-sm'> 


        <option value='0'>Seleccione un Curso</option>



          <?php 

          require_once "../../libreriasConexion/conexion.php";
            $conexion=conexion();
          $sql="SELECT * FROM `institucion`";
          $result=mysqli_query($conexion,$sql);
            while ($ver=mysqli_fetch_row($result)) {

            ?>


              <option value='<?php echo $ver[7] ?>'><?php echo $ver[7] ?></option>';
            

            <?php 
              }
                 ?>


            </select></td>

        <td><dir id="añoBusqueda"></dir></td>
        <td><button type="button" name="btn_editar" id="btn_editar" class="btn btn-success glyphicon glyphicon-pencil">Editar</button>
        </td>
      </tr>
      </table>




  
          

          
   
    





     


   
      



</div>
</div>
</div>








<script type="text/javascript">




    $("#espesialidadTotoal").change(function(){

      añoT=$('#añoT').val();
  espesialidadTotoal=$('#espesialidadTotoal').val();

  if (añoT!=="0" && espesialidadTotoal!=="0") {

    buscarCursoTot(añoT,espesialidadTotoal);
  }

    
      });


     $("#añoT").change(function(){

      añoT=$('#añoT').val();
  espesialidadTotoal=$('#espesialidadTotoal').val();

  if (añoT!=="0" && espesialidadTotoal!=="0") {

    buscarCursoTot(añoT,espesialidadTotoal);
  }

    
      });



     function buscarCursoTot(añoT,espesialidadTotoal){


  cadena= "añoT=" + añoT +
      "&espesialidadTotoal=" + espesialidadTotoal;

    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/cambioCurso/cambio.php',
          success:function(r){

           $('#añoBusqueda').html(r);
          }
        });
      }
  










$('#btn_editar').click(function(){
  
  if(confirm("¡Al cambiar de curso perderá todas las notas cargadas! Está seguro de la operación? "))
  {
   var id = [];

      añoT=$('#añoT').val();
       espesialidadTotoal=$('#espesialidadTotoal').val();
       cursoAlumnosCcambioCursoTOTAL=$('#cursoAlumnosCcambioCursoTOTAL').val();

      cadena= "añoT=" + añoT +
      "&espesialidadTotoal=" + espesialidadTotoal+
      "&cursoAlumnosCcambioCursoTOTAL=" + cursoAlumnosCcambioCursoTOTAL;



  $.ajax({
    type:"POST",
    url:'php/cambioCurso/BuscarAño.php',
    data:cadena,
    success:function(r){
      
    }
  });



   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();

    
    

    
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Seleccione al menos una casilla de verificación");
   }
   else
   {



    $.ajax({
     url:'php/cambioCurso/editarCursoVariosAlumnos.php',
     method:'POST',
     data:{id:id},
     success:function(r){

      if(r!==''){
   
        $('#CambioCursoalumnoTabla').load('cambioCurso/cambioCursoalumnoTabla.php');

        alertify.success("Bien");
      }else{
        alertify.error("Fallo el servidor :(");
      }
     

      }
     
    });



   }
   
  }
  else
  {
   return false;
  }
 });
 












  

  </script>



