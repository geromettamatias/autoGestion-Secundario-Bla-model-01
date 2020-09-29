<div class="modal fade" id="modalAlumnoAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog moda" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informacion</h4>
      </div>

      <p>
      <div class="modal-body">
   
       

        <!-- -->

        <div class="row justify-content-center">

  <!-- invisible.... hidden=""-->
  <div class="col-sm-3 center-block"></div>
  <div class="col-sm-6 center-block"><label><h2>CARGA DE DATOS</h2></label></div>
  <div class="col-sm-3 center-block"></div>
  <div class="col-sm-12">
  <input type="text" id="idAsistenciaAsistencia" name="idAsistenciaAsistencia" hidden="">
  <input type="text" id="idAlumnosFAsistencia" name="idAlumnosFAsistencia" hidden="">
  </div>


  <div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="cantidadFAsistencia">Cantidad Inasistencia</label>
  </div>
  <select class="form-control" id="cantidadFAsistencia">
    
    <option value="0.25">1/4 (uno y cuarto)</option>
    <option value="0.5">1/2 (uno y medio)</option>
    <option value="1">1 (uno)</option>
    
  </select>
</div>
<br><br>

<div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="justificoFAsistencia">Justifico</label>
  </div>
  <select class="form-control" id="justificoFAsistencia">
    
    <option value="SIN-DATOS">SIN-DATOS</option>
    <option value="SI">SI</option>
    <option value="NO">NO</option>
    
  </select>
</div>
<br><br>





<div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="cantidadFAsistencia">Fecha de Inasistencia</label>
  </div>

  <input aria-label="Small" type="date" value="2020-03-01" id="fechaFAsistencia" name="fechaFAsistencia" class="form-control"/>
  





  </div>

  <br><br><br><br>
  
 


  <div class="col-sm-12">
  <caption>
      <button class="btn btn-primary btn-lg btn-block" id="guardarnuevoAsistenciaAsistencia" >
        GUARDAR 
    
      </button>
    </caption>
  </div>
  <div class="col-sm-12">
    <br>



  <div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="cantidadFAsistencia">Buscar por fecha de Inasistencia</label>
  </div>

  <input aria-label="Small" type="text" value="" id="buscarInasistenciaAsistencia" name="buscarInasistenciaAsistencia" class="form-control"/>
 </div>
<br>
  
  <div id="resultadoBusquedaTotalAsistencia"></div>
      
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>


</p>
</div>

</div></div>
</script>

<script type="text/javascript">
   





$('#guardarnuevoAsistenciaAsistencia').click(function(){
          idAsistencia=$('#idAsistenciaAsistencia').val();
          idAlumnosF=$('#idAlumnosFAsistencia').val();
          cantidadF=$('#cantidadFAsistencia').val();
          fechaF=$('#fechaFAsistencia').val();
          justificoF=$('#justificoFAsistencia').val();






            agregardatosinasistenciaAsistencia(idAsistencia,idAlumnosF,cantidadF,fechaF,justificoF);



        });







$("#buscarInasistenciaAsistencia").keyup(function(){

var busca1=document.getElementById('idAlumnosFAsistencia').value;
    var busca2=document.getElementById('buscarInasistenciaAsistencia').value;
    var dato="da1="+busca1+"&da2="+busca2;

buscaInasistenciaTotalAsistencia(dato);

});




	function buscartroinasistenciaAsistencia(){

    var busca1=document.getElementById('idAlumnosFAsistencia').value;
    var busca2=document.getElementById('buscarInasistenciaAsistencia').value;
    var dato="da1="+busca1+"&da2="+"";

    
    $.ajax({
      url: 'php/asistenciaAlumno/proceso.php',
      type: 'POST',
      data: dato,
    })
    .done(function(res){
      $('#resultadoBusquedaTotalAsistencia').html(res);
    })
    .fail(function(){
      console.log("error");
    })
    .always(function(){
      console.log("completo");
    })




};





</script>
