function notaAsignatura(datos){

	




$.ajax({
          type:"post",
          data:'valor=' + datos,
          url:'php/notasMaterias/notaAsignaturasession.php',
          success:function(r){
           $('#MATERIASTabla').load('materiasNotas/materiasNotas.php');
          }
        });




menuPrincipalMATERIAS();





}


function notaAsignaturaMATERIASCalificacion(datos){


  d=datos.split('||');
  


$.ajax({
          type:"post",
          data:'valor=' + d[0] + '&valor3=' + d[1],
          url:'php/Calificacionnota/CalificacionnotaAsignaturasession.php',
          success:function(r){
           $('#MATERIASTablaCalificacion').load('materiaNotasCalificacion/materiasNotasCalificacion.php');

          }
        });




menuPrincipalMATERIASCalif();


}

