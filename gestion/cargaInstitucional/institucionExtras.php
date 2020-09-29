
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Datos de la Institución</h4>
      </div>
      <div class="modal-body">
          <label>Nombre de la institución</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm">
          <label>CUE de la institución</label>
          <input type="text" name="cue" id="cue" class="form-control input-sm">
          <label>Domicilio de la institución</label>
          <input type="text" name="domicilio" id="domicilio" class="form-control input-sm">
          <label>Telefono de la institución</label>
          <input type="text" name="tel" id="tel" class="form-control input-sm">
          <label>Email de la institución</label>
          <input type="text" name="email" id="email" class="form-control input-sm">
          <label>Facebook de la institución</label>
          <input type="text" name="face" id="face" class="form-control input-sm">

          <br>
          <label>Modalidad de la institución</label>
          <input type="text" name="modalt" id="modalt" class="form-control input-sm">
          <label>Plan de Estudio de la institución</label>
          <input type="text" name="plan" id="plan" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idInstitucion" name="idInstitucion">
          
          <label>Nombre de la institución</label>
          <input type="text" name="nombreU" id="nombreU" class="form-control input-sm">
          <label>CUE de la institución</label>
          <input type="text" name="cueU" id="cueU" class="form-control input-sm">
          <label>Domicilio de la institución</label>
          <input type="text" name="domicilioU" id="domicilioU" class="form-control input-sm">
          <label>Telefono de la institución</label>
          <input type="text" name="telU" id="telU" class="form-control input-sm">
          <label>Email de la institución</label>
          <input type="text" name="emailU" id="emailU" class="form-control input-sm">
          <label>Facebook de la institución</label>
          <input type="text" name="faceU" id="faceU" class="form-control input-sm">

          <br>
          <label>Modalidad de la institución</label>
          <input type="text" name="modaltU" id="modaltU" class="form-control input-sm">
          <label>Plan de Estudio de la institución</label>
          <input type="text" name="planU" id="planU" class="form-control input-sm">
        
          
             
             
       


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="modalAsigPlanDeEstudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog moda" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PLAN DE ESTUDIO</h4>
      </div>

      <div class="modal-body">
      <div class="row justify-content-center">

  <!-- invisible.... hidden=""-->
  <div class="col-sm-3 center-block"></div>
  <div class="col-sm-6 center-block"><label><h2>DATOS</h2></label></div>
  <div class="col-sm-3 center-block"></div>
  <div class="col-sm-12">
  <input type="text" id="idInstitucionP" name="idInstitucionP" hidden="">
  <input type="text" id="idPlanAsig" name="idPlanAsig" hidden="">

  </div>

  <div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="planAño">AÑO LECTIVO</label>
  </div>

  
          <select id="planAño" name="planAño" class='form-control'>
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
                </select>


</div>
<br><br>




<div class="col-sm-12">
  <div class="input-group-prepend">
    <label class="input-group-text" for="planAsignatura">ASIGNATURA</label>
  </div>

  <input aria-label="Small" type="text" id="planAsignatura" name="planAsignatura" class="form-control"/>
  

  </div>

  <br><br><br><br>
  
 


  <div class="col-sm-12">
  <caption>
      <button class="btn btn-primary btn-lg btn-block" id="guardarPlanAsignatura" >
        GUARDAR 
    
      </button>
    </caption>
  </div>
  <div class="col-sm-12">
    <br>



<br>
  
  <div id="PlanAñoAsignatura"></div>
      
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>


</div>

</div></div>




























<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          cue=$('#cue').val();
          domicilio=$('#domicilio').val();
          tel=$('#tel').val();
          email=$('#email').val();

          face=$('#face').val();
          modalt=$('#modalt').val();
          plan=$('#plan').val();

         
            agregardatosinstitu(nombre,cue,domicilio,tel,email,face,modalt,plan);
        });



     



        $('#actualizadatos').click(function(){
          actualizaDatosnnnn();









        });






           $('#guardarPlanAsignatura').click(function(){

            
          idInstitucionP=$('#idInstitucionP').val();
          idPlanAsig=$('#idPlanAsig').val();
          planAño=$('#planAño').val();
          planAsignatura=$('#planAsignatura').val();

          

         
            guardarAsignaturaPlanAño(idInstitucionP,idPlanAsig,planAño,planAsignatura);
        });

    });
</script>



