<p>
<div class="modal fade" id="modalNuevoCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Curso</h4>
      </div>
      <div class="modal-body">
          <label>CURSO</label>
          <input type="text" name="" id="curso" class="form-control input-sm">

          <label><b>CORRESPONDE A: </b></label>
          <select id="año" name="año" class='form-control input-sm'>
            
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

      <div class="modal-body">
          <label>ESPECIALIDAD</label>
      <div id="especu"></div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoCursoNuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idCurso" name="">
          <label>CURSO</label>
          <input type="text" name="" id="cursou" class="form-control input-sm">
          <label><b>CORRESPONDE A: </b></label>
          <select id="añou" name="añou" class='form-control input-sm'>
                  <option value="0">----</option>
                  <option value="PRIMER AÑO">"PRIMER AÑO"</option>
                  <option value="SEGUNDO AÑO">"SEGUNDO AÑO"</option>
                  <option value="TERCER AÑO">"TERCER AÑO"</option>
                  <option value="CUARTO AÑO">"CUARTO AÑO"</option>
                  <option value="QUINTO AÑO">"QUINTO AÑO"</option>
                  <option value="SEXTO AÑO">"SEXTO AÑO"</option>
                  <option value="SEXTO AÑO">"SEPTIMO AÑO"</option>
                  <option value="SEXTO AÑO">"BLA I"</option>
                  <option value="SEXTO AÑO">"BLA II"</option>
                  <option value="SEXTO AÑO">"BLA III"</option>
                </select>
    
        
      </div>

      <div class="modal-body">
          <label>ESPECIALIDAD</label>
      <div id="especuEdu"></div>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosCursoNuevo" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>



<!-- Modal asignatura -->





<div class="modal fade" id="modalNombreAsignaturaCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog moda" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Información</h4>
      </div>
      <div class="modal-body">
   
       

        <!-- -->

        <div class="row justify-content-center">

  <!-- invisible.... hidden=""-->
  
  <label><h2>ACTUALIZACIÓN DE DATOS</h2></label>
  <div class="col-sm-12">
  
 
  <input type="text" hidden="" id="idCursoUT" name="">
 
  <input type="text" hidden="" id="idAsignaturaUT" name="">
        
  <input type="text" id="cursoA" name="cursoA" placeholder="Nombre de la Asignatura" class="form-control"/>
  </div>
  <div class="col-sm-12"> 
  <input type="number" id="horasCatedrasA" name="horasCatedrasA" placeholder="Cantidad de H-Cat" class="form-control"/>
  </div>
  <div class="col-sm-12"> 
  <input type="text" id="horarioA" name="horarioA" placeholder="Horario de Cursado" class="form-control"/>
  </div>

  <div class="col-sm-12">
  <caption>
      <button class="btn btn-primary btn-lg btn-block" id="guardarnuevoAsignaturaCURSO" >
        GUARDAR 
    
      </button>
    </caption>
  </div>
  <div class="col-sm-12">
    <br><br>
  
      <div id="resultadoBusquedaAsignatura"></div>
  
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>



</div>
</p>
<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevoCursoNuevo').click(function(){
          curso=$('#curso').val();
          año=$('#año').val();
          especialidadT=$('#especialidadT').val();

          

            agregardatosCursoCursoNuevo(curso,año,especialidadT);
        });



        $('#actualizadatosCursoNuevo').click(function(){
          actualizaDatosCursoCursoNuevo();
        });

    });

  $('#guardarnuevoAsignaturaCURSO').click(function(){
          idAsignaturaUT=$('#idAsignaturaUT').val();
          idCursoUT=$('#idCursoUT').val();
          cursoA=$('#cursoA').val();
          horasCatedrasA=$('#horasCatedrasA').val();
          horarioA=$('#horarioA').val();


            agregardatosAsignaturaCURSO(idAsignaturaUT,idCursoUT,cursoA,horasCatedrasA,horarioA);


        });







</script>

