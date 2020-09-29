function regresarmenuPrincipalAlumno(){

  $("#menuPrincipalAlumno").show(100);
  $("#datosAlumnoMenu").hide(50);
  $("#libretaCalificacionMenu").hide(50);
  $("#analiticoMenu").hide(50);
  $("#constanciaAlumnoRegulaMenu").hide(50);
}


function datosAlumnoMenu(){

  $("#menuPrincipalAlumno").hide(50);
  $("#datosAlumnoMenu").show(100);
  $("#libretaCalificacionMenu").hide(50);
  $("#analiticoMenu").hide(50);
  $("#constanciaAlumnoRegulaMenu").hide(50);
}

function libretaCalificacionMenu(){

  $("#menuPrincipalAlumno").hide(50);
  $("#datosAlumnoMenu").hide(50);
  $("#libretaCalificacionMenu").show(100);
  $("#analiticoMenu").hide(50);
  $("#constanciaAlumnoRegulaMenu").hide(50);
   $('#libretaCalificacionTABLA').load('libretasCalificacion/libretaDigital.php');
}

function analiticoMenu(){

  $("#menuPrincipalAlumno").hide(50);
  $("#datosAlumnoMenu").hide(50);
  $("#libretaCalificacionMenu").hide(50);
  $("#analiticoMenu").show(100);
  $("#constanciaAlumnoRegulaMenu").hide(50);
}


function constanciaAlumnoRegulaMenu(){

  $("#menuPrincipalAlumno").hide(50);
  $("#datosAlumnoMenu").hide(50);
  $("#libretaCalificacionMenu").hide(50);
  $("#analiticoMenu").hide(50);
  $("#constanciaAlumnoRegulaMenu").show(100);
}