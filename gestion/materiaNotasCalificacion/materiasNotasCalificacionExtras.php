<p>
<div class="modal fade" id="modalEdicionNotasCalificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notas Alumnos</h4>
      </div>
      <div class="modal-body">

          <input type="text" hidden="" id="idNotaCalificacion" name="idNotaCalificacion">
          <input type="text" hidden="" id="idAlumnoCalificacion" name="idAlumnoCalificacion">
          <input type="text" hidden="" id="idAsignaturasCalificacion" name="idAsignaturasCalificacion">


           <label>Apellido y Nombre:</label>
          <div id="ApellidoNombreCalificacion"></div><br>


          <label>Asinatura:</label>
          <div id="AsignaturaCuestionCalificacion"></div><br>



          <input type="text" name="trimestre1Calificacion" id="trimestre1Calificacion" class="form-control input-sm" placeholder="Nota del 1° Primer Trimestre">

          <input type="text" name="trimestre2Calificacion" id="trimestre2Calificacion" class="form-control input-sm" placeholder="Nota del 2° Segundo Trimestre">

          <input type="text" name="trimestre3Calificacion" id="trimestre3Calificacion" class="form-control input-sm" placeholder="Nota del 3° Tercer Trimestre">

          <input type="text" name="integradorCalificacion" id="integradorCalificacion" class="form-control input-sm" placeholder="Integrador Final">

          <div id="idcalificacionDiciembre">
          <input type="text" name="diciembreCalificacion" id="diciembreCalificacion" class="form-control input-sm" placeholder="Recuperatorio Diciembre">
          </div>
          <div id="idcalificacionMarzo">
          <input type="text" name="marzoCalificacion" id="marzoCalificacion" class="form-control input-sm" placeholder="Recuperatorio Marzo">
          </div>
          <br>
        
          <label>Calificación Final:</label>
          <input type="text" name="CalificacionfinalAsignauraCalificacion" id="CalificacionfinalAsignauraCalificacion" class="form-control input-sm" placeholder="CALIFICACIÓN FINAL">
          
          
          
          
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosNotasCalificacion" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</p>

<script>

 $('#actualizadatosNotasCalificacion').click(function(){
          actualizadatosNotasCalificacion();
        });



</script>