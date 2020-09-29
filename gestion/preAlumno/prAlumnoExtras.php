<p>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionPreAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">


      <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='lanAñoAlumnoPRET2'>AÑO</label>
          </div>

          <select id="lanAñoAlumnoPRET2" name="lanAñoAlumnoPRET2" class='form-control'>
                  <option value='0'>Seleccione el Año</option>
                     <option value="PRIMER AÑO">"PRIMER AÑO"</option>

                  <option value="SEGUNDO AÑO">"SEGUNDO AÑO"</option>
                  
                  <option value="TERCER AÑO">"TERCER AÑO"</option>
                  <option value="CUARTO AÑO">"CUARTO AÑO"</option>
                  <option value="QUINTO AÑO">"QUINTO AÑO"</option>
                   <option value="SEXTO AÑO">"SEXTO AÑO"</option>
                                 
                  
                  <option value="SEPTIMO AÑO">"SEPTIMO AÑO"</option>
                  <option value="BLA I">"BLA I"</option>
                  <option value="BLA II">"BLA II"</option>
                  <option value="BLA III">"BLA III"</option>
                </select>
          </div><br>


                   <div class='col-sm-12'>
           <div class='input-group-prepend'>
            <label class='input-group-text'>CURSO</label>
          </div>


         <div id="especialidadAlumnoPREtt"></div><br>

         </div>


         <div id="cursoAlumnosUpa"></div><br>





       

      

          <input type="text" hidden="" id="idAlumnosUpa" name="idAlumnosUpa">

          <input type="text" hidden="" id="cursoAlumnosUpa" name="cursoAlumnosUpa">

          <br><b><u>LEGAJO</u></b><br><br>

          <label>N° Legajo del alumno</label>

          <input type="text" name="nLegajoAlumnoUpa" id="nLegajoAlumnoUpa" class="form-control input-sm" placeholder="N° legajo del Alumno">

             <label>Situacion del Legajo</label>

          <input type="text" name="legajoSituacionUpa" id="legajoSituacionUpa" class="form-control input-sm" placeholder="Situacion del legajo">

          <br><br><b><u>DATOS QUE SE REGISTRAN</u></b><br><br>


          <label>Apellido y Nombre del alumno:</label>

          <input type="text" name="nombreAlumnosUpa" id="nombreAlumnosUpa" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">

          <label>DNI del alumno</label>
       
          <input type="text" name="dniAlumnosUpa" id="dniAlumnosUpa" class="form-control input-sm" placeholder="D.N.I. del Alumno">

           <label>Cuil del alumno</label>
      
          <input type="text" name="cuilAlumnosUpa" id="cuilAlumnosUpa" class="form-control input-sm" placeholder="Cuil del Alumno">

          <label>Domicilio del alumno:</label>
          
          <input type="text" name="domicilioAlumnosUpa" id="domicilioAlumnosUpa" class="form-control input-sm" placeholder="Domicilio del Alumno">

             <label>Email del alumno</label>

          <input type="text" name="emailAlumnosUpa" id="emailAlumnosUpa" class="form-control input-sm" placeholder="Email del Alumno">

          <label>N° telefono del almno</label>

          <input type="text" name="telefonoAlumnosUpa" id="telefonoAlumnosUpa" class="form-control input-sm" placeholder="Telefono del Alumno">

          <label>Problemas o discapacidad del alumno</label>

          <input type="text" name="discapasidadAlumnosUpa" id="discapasidadAlumnosUpa" class="form-control input-sm" placeholder="Discapacidad del Alumno">

          

           <label>Apellido y Nombre del Tutor</label>

          <input type="text" name="nombreTutorUpa" id="nombreTutorUpa" class="form-control input-sm" placeholder="Apellido y Nombre del Tutor">

          <label>DNI del Tutor</label>

          <input type="text" name="dniTutorUpa" id="dniTutorUpa" class="form-control input-sm" placeholder="DNI del Tutor">

          <label>Telefono del Tutor</label>

          <input type="text" name="TelefonoTutorUpa" id="TelefonoTutorUpa" class="form-control input-sm" placeholder="DNI del Tutor">

          <label>Observaciones</label>

          <input type="text" name="obserbacionGeneralUpa" id="obserbacionGeneralUpa" class="form-control input-sm" placeholder="Observaciones">

           <label>Pass</label>

          <input type="text" name="passLoginUpa" id="passLoginUpa" class="form-control input-sm" placeholder="Observaciones">

          <label>Situación Alta</label>

          <input type="text" name="situacionAltaUpa" id="situacionAltaUpa" class="form-control input-sm" placeholder="Observaciones">

          <label>Observación Alta</label>

          <input type="text" name="obserbacionAltaUpa" id="obserbacionAltaUpa" class="form-control input-sm" placeholder="Observaciones">
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatospa" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


</p>

<script type="text/javascript">
    $(document).ready(function(){



        $('#actualizadatospa').click(function(){
          actualizaDatosAlumnototal1pa();
        });

     

    });






$("#dniAlumnospa").keyup(function(){

  var dniAlumnospa=document.getElementById('dniAlumnospa').value;


      buscarDNIAlumnoNuevopa(dniAlumnospa);

        });





$("#especialidadAlumnoPREtt").change(function(){




  var lanAñoAlumnoPRET2=$('#lanAñoAlumnoPRET2').val();
  var especialidadAlumnoPRE2=$('#especialidadAlumnoPRE2').val();

    // detener todo    return false;


  if ((lanAñoAlumnoPRET2!=="0") && (especialidadAlumnoPRE2!=="0")) {

    cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2);

  }
 


 });


$("#lanAñoAlumnoPRET2").change(function(){




  var lanAñoAlumnoPRET2=$('#lanAñoAlumnoPRET2').val();
  var especialidadAlumnoPRE2=$('#especialidadAlumnoPRE2').val();

    // detener todo    return false;


  if ((lanAñoAlumnoPRET2!=="0") && (especialidadAlumnoPRE2!=="0")) {

    cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2);

  }

        });




</script>









