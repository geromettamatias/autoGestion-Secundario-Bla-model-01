<div class="modal fade" id="modalEDITARALUMNOUNICO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5 class="modal-title" id="myModalLabel"><dir id="dniAlumnosDATOS"></dir></h5>
      </div>
      <div class="modal-body">

          <input type="text" name="idAlumnosDATOS" id="idAlumnosDATOS" hidden="">

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='nombreAlumnosDATOS'>APELLIDO Y NOMBRE</label>
          </div>
          <input type="text" name="nombreAlumnosDATOS" id="nombreAlumnosDATOS" class="form-control input-sm">
          </div><br>


           <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='domicilioAlumnosDATOS'>DOMICILIO DEL ALUMNO</label>
          </div>

          
          <input type="text" name="domicilioAlumnosDATOS" id="domicilioAlumnosDATOS" class="form-control input-sm">

          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='emailAlumnosDATOS'>EMAIL DEL ALUMNO</label>
          </div>

          <input type="email" name="emailAlumnosDATOS" id="emailAlumnosDATOS" class="form-control input-sm">

          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='telefonoAlumnosDATOS'>TELEFONO DEL ALUMNO</label>
          </div>

          <input type="text" name="telefonoAlumnosDATOS" id="telefonoAlumnosDATOS" class="form-control input-sm">


          </div><br>


          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='nombreTutorDATOS'>APELLIDO Y NOMBRE DEL TUTOR</label>
          </div>
         

          <input type="text" name="nombreTutorDATOS" id="nombreTutorDATOS" class="form-control input-sm">




          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='dniTutorDATOS'>DNI DEL TUTOR</label>
          </div>

          <input type="text" name="dniTutorDATOS" id="dniTutorDATOS" class="form-control input-sm">

          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='TelefonoTutorDATOS'>TELEFONO DEL TUTOR</label>
          </div>

          <input type="text" name="TelefonoTutorDATOS" id="TelefonoTutorDATOS" class="form-control input-sm">

          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='passLoginDATOS'>CONTRASEÑA</label>
          </div>

          <input type="password" name="passLoginDATOS" id="passLoginDATOS" class="form-control input-sm">


          </div><br>

          <div class='col-sm-12'>
          <div class='input-group-prepend'>
            <label class='input-group-text' for='passLogin2DATOS'>CONTRASEÑA REPETIR</label>
          </div>

          <input type="password" name="passLogin2DATOS" id="passLogin2DATOS" class="form-control input-sm"><br>

           <div id="contraCoinsideDATOS"></div><br>

        

      </div>
      <div id="botonAgregarAlumno">
      <div class="modal-footer">
      <div id="finalFguardartodo">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumnoDATOS">
        GUARDAR
        </button>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>


<script>

 $(document).ready(function(){

      $('#guardarnuevoAlumnoDATOS').click(function(){
          editarDatosAlumnosUnicosfinalaNTES();
        });
        

    

});
        

$("#passLogin2DATOS").keyup(function(){

  var busca=document.getElementById('passLoginDATOS').value;

  var busca2=document.getElementById('passLogin2DATOS').value;

    // detener todo    return false;
if (busca!="" && busca2!="") {

  if (busca!=busca2) {
    $('#contraCoinsideDATOS').html('<font color="red">NO SON IGUALES</font>');
    $("#finalFguardartodo").hide(50);

  }else{
    $('#contraCoinsideDATOS').html('<font color="green">SON IGUALES</font>');
    $("#finalFguardartodo").show(50);

  }
}else{

  $('#contraCoinsideDATOS').html('');
  $("#finalFguardartodo").hide(50);
}



  });




$("#passLoginDATOS").keyup(function(){

  var busca=document.getElementById('passLoginDATOS').value;

  var busca2=document.getElementById('passLogin2DATOS').value;

    // detener todo    return false;
if (busca!="" && busca2!="") {

  if (busca!=busca2) {
    $('#contraCoinsideDATOS').html('<font color="red">NO SON IGUALES</font>');
    $("#finalFguardartodo").hide(50);

  }else{
    $('#contraCoinsideDATOS').html('<font color="green">SON IGUALES</font>');
    $("#finalFguardartodo").show(50);

  }
}else{

  $('#contraCoinsideDATOS').html('');
  $("#finalFguardartodo").hide(50);
}

});




    </script>