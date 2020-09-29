
<div class="modal fade" id="modalNuevoAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Alumno</h4>
      </div>
      <div class="modal-body">
          <input type="text" name="nombreAlumnos" id="nombreAlumnos" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">
       
          <input type="text" name="dniAlumnos" id="dniAlumnos" class="form-control input-sm" placeholder="D.N.I. del Alumno">


          <input type="text" name="resultadoBusquedaDniAlumnoAgregar2" id="resultadoBusquedaDniAlumnoAgregar2"hidden="">

          <div id="resultadoBusquedaDniAlumnoAgregar"></div>


      
          <input type="text" name="cuilAlumnos" id="cuilAlumnos" class="form-control input-sm" placeholder="Cuil del Alumno">
          
          <input type="text" name="domicilioAlumnos" id="domicilioAlumnos" class="form-control input-sm" placeholder="Domicilio del Alumno">

          <input type="text" name="emailAlumnos" id="emailAlumnos" class="form-control input-sm" placeholder="Email del Alumno">

          <input type="text" name="telefonoAlumnos" id="telefonoAlumnos" class="form-control input-sm" placeholder="Telefono del Alumno">

          <input type="text" name="discapasidadAlumnos" id="discapasidadAlumnos" class="form-control input-sm" placeholder="Discapacidad del Alumno">

          <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="planAñoAlumno">AÑO LECTIVO</label>
          </div>

          <select id="planAñoAlumno" name="planAñoAlumno" class='form-control'>
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


          <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="especialidadAlumno">ORIENTACIÓN</label>
          </div>

           <select id='especialidadAlumno' name='especialidadAlumno' class='form-control input-sm'>
                  <option value='0'>Seleccione un Orientación</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucion`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[7] ?>'><?php echo $ver[7] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>


              </div>



              <div id="cursoTuss"></div>



                



          

          <input type="text" name="nLegajoAlumno" id="nLegajoAlumno" class="form-control input-sm" placeholder="N° legajo del Alumno">

          <input type="text" name="legajoSituacion" id="legajoSituacion" class="form-control input-sm" placeholder="Situacion del legajo">

          <input type="text" name="nombreTutor" id="nombreTutor" class="form-control input-sm" placeholder="Apellido y Nombre del Tutor">

          <input type="text" name="dniTutor" id="dniTutor" class="form-control input-sm" placeholder="DNI del Tutor">

          <input type="text" name="TelefonoTutor" id="TelefonoTutor" class="form-control input-sm" placeholder="Telefono del Tutor">

          <input type="text" name="obserbacionGeneral" id="obserbacionGeneral" class="form-control input-sm" placeholder="Observaciones">
       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumno">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">

       
      

          <input type="text" hidden="" id="idAlumnosU" name="idAlumnosU">


          <label>Apellido y Nombre del alumno:</label>

          <input type="text" name="nombreAlumnosU" id="nombreAlumnosU" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">

          <label>DNI del alumno</label>
       
          <input type="text" name="dniAlumnosU" id="dniAlumnosU" class="form-control input-sm" placeholder="D.N.I. del Alumno">

           <label>Cuil del alumno</label>
      
          <input type="text" name="cuilAlumnosU" id="cuilAlumnosU" class="form-control input-sm" placeholder="Cuil del Alumno">

          <label>Domicilio del alumno:</label>
          
          <input type="text" name="domicilioAlumnosU" id="domicilioAlumnosU" class="form-control input-sm" placeholder="Domicilio del Alumno">

             <label>Email del alumno</label>

          <input type="text" name="emailAlumnosU" id="emailAlumnosU" class="form-control input-sm" placeholder="Email del Alumno">

          <label>N° telefono del almno</label>

          <input type="text" name="telefonoAlumnosU" id="telefonoAlumnosU" class="form-control input-sm" placeholder="Telefono del Alumno">

          <label>Problemas o discapacidad del alumno</label>

          <input type="text" name="discapasidadAlumnosU" id="discapasidadAlumnosU" class="form-control input-sm" placeholder="Discapacidad del Alumno">

         

            

         <label>N° Legajo del alumno</label>

          <input type="text" name="nLegajoAlumnoU" id="nLegajoAlumnoU" class="form-control input-sm" placeholder="N° legajo del Alumno">

             <label>Situacion del Legajo</label>

          <input type="text" name="legajoSituacionU" id="legajoSituacionU" class="form-control input-sm" placeholder="Situacion del legajo">

           <label>Apellido y Nombre del Tutor</label>

          <input type="text" name="nombreTutorU" id="nombreTutorU" class="form-control input-sm" placeholder="Apellido y Nombre del Tutor">

          <label>DNI del Tutor</label>

          <input type="text" name="dniTutorU" id="dniTutorU" class="form-control input-sm" placeholder="DNI del Tutor">

          <label>Telefono del Tutor</label>

          <input type="text" name="TelefonoTutorU" id="TelefonoTutorU" class="form-control input-sm" placeholder="DNI del Tutor">

          <label>Observaciones</label>

          <input type="text" name="obserbacionGeneralU" id="obserbacionGeneralU" class="form-control input-sm" placeholder="Observaciones">
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosAlumno" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>















<div class="modal fade" id="modalEdicionTAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">

          <input type="text" id="idAlumnosC" name="idAlumnosC" hidden="">


           <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="planAñoAlumnoU">AÑO LECTIVO</label>
          </div>

          <select id="planAñoAlumnoU" name="planAñoAlumnoU" class='form-control'>
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


          <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="especialidadAlumnoU">ORIENTACIÓN</label>
          </div>

           <select id='especialidadAlumnoU' name='especialidadAlumnoU' class='form-control input-sm'>
                  <option value='0'>Seleccione un Orientación</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucion`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[7] ?>'><?php echo $ver[7] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>


              </div>



              <div id="cursoTussU"></div>
              



       
      
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosCursoAlumno" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>










<!-- Modal para INFORMACION -->


<div class="modal fade" id="modalInformacionAlumnoAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INFORMACÓN</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idAlumnosUx" name="idAlumnosUx"><br>

          <label>AÑO</label>
          <div id="planAñoAlumnoUx"></div>
          <label>ORIENTACIÓN</label>
          <div id="especialidadAlumnoUx"></div>
           <label>Curso</label>
          <div id="cursoAlumnosUx"></div>


          <label>Apellido y Nombre del alumno:</label>
          <div id="nombreAlumnosUx"></div>
          <label>DNI del alumno</label>
          <div id="dniAlumnosUx"></div>
          <label>Cuil del alumno</label>
          <div id="cuilAlumnosUx"></div>
          <label>Domicilio del alumno:</label>
          <div id="domicilioAlumnosUx"></div>
          <label>Email del alumno</label>
          <div id="emailAlumnosUx"></div>
          <label>N° telefono del almno</label>
          <div id="telefonoAlumnosUx"></div>
          <label>Problemas o discapacidad del alumno</label>
          <div id="discapasidadAlumnosUx"></div>
         
          <label>N° Legajo del alumno</label>
          <div id="nLegajoAlumnoUx"></div>
          <label>Situacion del Legajo</label>
          <div id="legajoSituacionUx"></div>
          <label>Apellido y Nombre del Tutor</label>
          <div id="nombreTutorUx"></div>
          <label>DNI del Tutor</label>
          <div id="dniTutorUx"></div>
          <label>Telefono del Tutor</label>
          <div id="TelefonoTutorUx"></div>
          <label>Observaciones</label>
          <div id="obserbacionGeneralUx"></div>
    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>







<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevoAlumno').click(function(){
          nombreAlumnos=$('#nombreAlumnos').val();
          dniAlumnos=$('#dniAlumnos').val();
          cuilAlumnos=$('#cuilAlumnos').val();
          domicilioAlumnos=$('#domicilioAlumnos').val();
          emailAlumnos=$('#emailAlumnos').val();
          telefonoAlumnos=$('#telefonoAlumnos').val();
          discapasidadAlumnos=$('#discapasidadAlumnos').val();

  
          planAñoAlumno=$('#planAñoAlumno').val();
          especialidadAlumno=$('#especialidadAlumno').val();

          cursoAlumnos=$('#cursoAlumnos').val();
          nLegajoAlumno=$('#nLegajoAlumno').val();
          legajoSituacion=$('#legajoSituacion').val();
          nombreTutor=$('#nombreTutor').val();
          dniTutor=$('#dniTutor').val();
          TelefonoTutor=$('#TelefonoTutor').val();
          obserbacionGeneral=$('#obserbacionGeneral').val();



resultadoBusquedaDniAlumnoAgregar2=$('#resultadoBusquedaDniAlumnoAgregar2').val();

if(resultadoBusquedaDniAlumnoAgregar2==="listo"){

  if (nombreAlumnos != "" & cuilAlumnos != "" & domicilioAlumnos != "" & emailAlumnos != "" & telefonoAlumnos != "" & discapasidadAlumnos != "" & cursoAlumnos != "" & nLegajoAlumno != "" & legajoSituacion != "" & nombreTutor != "" & dniTutor != "" & TelefonoTutor != "" & obserbacionGeneral != "") {

   agregardatosAlumnosAlumno(nombreAlumnos,dniAlumnos,cuilAlumnos,domicilioAlumnos,emailAlumnos,telefonoAlumnos,discapasidadAlumnos,cursoAlumnos,nLegajoAlumno,legajoSituacion,nombreTutor,dniTutor,TelefonoTutor,obserbacionGeneral,planAñoAlumno,especialidadAlumno);



  }else{

 alertify.confirm('Administrador', 'Los campos se encuentran incompletos ', 
          function(){ alertify.error('Se cancelo') }
                , function(){ alertify.error('Se cancelo')})

    


  }
      

}else{

  if (resultadoBusquedaDniAlumnoAgregar2==="ocupado") {

    alertify.confirm('El DNI', 'El DNI ya se encuentra registrado ', 
          function(){ alertify.error('Se cancelo') }
                , function(){ alertify.error('Se cancelo')});


  }else{


    alertify.confirm('Administrador', 'Los campos se encuentran incompletos ', 
          function(){ alertify.error('Se cancelo') }
                , function(){ alertify.error('Se cancelo')});



  }




}

LimpiezaAlumnoTotalAlumno();
$('#resultadoBusquedaDniAlumnoAgregar').html("");
$('#resultadoBusquedaDniAlumnoAgregar2').val("");



        });



        $('#actualizadatosAlumno').click(function(){
          actualizaDatosAlumnoAlumno();
        });

         $('#actualizadatosCursoAlumno').click(function(){
          actualizaDatosAlumnocursoAlumno();
        });

    });






$("#dniAlumnos").keyup(function(){

  var dniAlumnos=document.getElementById('dniAlumnos').value;


      buscarDNIAlumnoNuevoAlumno(dniAlumnos);

        });



$("#especialidadAlumno").change(function(){

  var planAñoAlumno=document.getElementById('planAñoAlumno').value;
  var especialidadAlumno=document.getElementById('especialidadAlumno').value;



      MandarOrientacionAño(planAñoAlumno,especialidadAlumno);

        });



$("#planAñoAlumno").change(function(){



  var planAñoAlumno=document.getElementById('planAñoAlumno').value;
  var especialidadAlumno=document.getElementById('especialidadAlumno').value;

if (especialidadAlumno!=="0") {
  MandarOrientacionAño(planAñoAlumno,especialidadAlumno);
}



  });


$("#especialidadAlumnoU").change(function(){

  var planAñoAlumnoU=document.getElementById('planAñoAlumnoU').value;
  var especialidadAlumnoU=document.getElementById('especialidadAlumnoU').value;



      MandarOrientacionAñoU(planAñoAlumnoU,especialidadAlumnoU);

        });



$("#planAñoAlumnoU").change(function(){



  var planAñoAlumnoU=document.getElementById('planAñoAlumnoU').value;
  var especialidadAlumnoU=document.getElementById('especialidadAlumnoU').value;

if (especialidadAlumnoU!=="0") {
  MandarOrientacionAñoU(planAñoAlumnoU,especialidadAlumnoU);
}

      

  });








</script>
