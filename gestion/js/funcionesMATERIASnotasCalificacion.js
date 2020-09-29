function notaAsignaturaMATERIASinfo(datos){

	d=datos.split('||');

	idAlumno=d[0];
	curso=d[15];
	asignatura=d[16];

	apellidoNombre=d[1];


	$.ajax({
          type:"post",
          data:'idAlumno=' + idAlumno +'&curso=' + curso +'&asignatura=' + asignatura,
          url:'php/Calificacionnota/informeNotaCalificacionAsignatura.php',
          success:function(datosFinal){


          		g=datosFinal.split('||');
		
				comp=g[3];


	




				function informetotslFinalNota(){
				alertify.confirm('Informe de Alumno', '<b><u>APELLIDO Y NOMBRE: </u></b>'+apellidoNombre+'<br>'
									+'<br><b><u>1er Trimestre: </u></b>'+ g[3]
									+'<br><b><u>2er Trimestre: </u></b>'+ g[4]
									+'<br><b><u>3er Trimestre: </u></b>'+ g[5]
									+'<br><b><u>Integrador: </u></b>'+ g[6]
									+'<br><br><b><u>Recuperatorio de Diciembre: </u></b>'+ g[7]
									+'<br><br><b><u>Recuperatorio de Marzo: </u></b>'+ g[8]
									+'<br><br><b><u>NOTA FINAL: </u></b>'+ g[9], 
								function(){ alertify.success('Fin de la operación') }
			                , function(){ alertify.error('Se cancelo')});
			}
				
				

       

          		informetotslFinalNota();
 

          	




          }
        });











}






function notaAsignaturaMATERIASeditar(datos){

	d=datos.split('||');

	idAlumno=d[0];
	curso=d[15];
	asignatura=d[16];

	apellidoNombre=d[1];


	$.ajax({
          type:"post",
          data:'idAlumno=' + idAlumno +'&curso=' + curso +'&asignatura=' + asignatura,
          url:'php/Calificacionnota/informeNotaCalificacionAsignatura.php',
          success:function(datosFinal){


          		g=datosFinal.split('||');
		
				comp=g[0];


				

          		$('#ApellidoNombreCalificacion').html(apellidoNombre);

          		$('#idNotaCalificacion').val(g[0]);
          		$('#idAlumnoCalificacion').val(idAlumno);
          		$('#idAsignaturasCalificacion').val(g[2]);

          		$('#AsignaturaCuestionCalificacion').html(asignatura);
          		$('#trimestre1Calificacion').val(g[3]);
          		$('#trimestre2Calificacion').val(g[4]);
          		$('#trimestre3Calificacion').val(g[5]);
          		$('#integradorCalificacion').val(g[6]);

          		$('#diciembreCalificacion').val(g[7]);
          		$('#marzoCalificacion').val(g[8]);

          		$('#CalificacionfinalAsignauraCalificacion').val(g[9]);
         


		
			
 



          }
        });











}





function actualizadatosNotasCalificacion(){

	$('#ApellidoNombreCalificacion').html();

          		idNotaCalificacion=$('#idNotaCalificacion').val();
          		idAlumnoCalificacion=$('#idAlumnoCalificacion').val();
          		idAsignaturasCalificacion=$('#idAsignaturasCalificacion').val();

          		AsignaturaCuestionCalificacion=$('#AsignaturaCuestionCalificacion').html();
          		trimestre1Calificacion=$('#trimestre1Calificacion').val();
          		trimestre2Calificacion=$('#trimestre2Calificacion').val();
          		trimestre3Calificacion=$('#trimestre3Calificacion').val();
          		integradorCalificacion=$('#integradorCalificacion').val();

          		diciembreCalificacion=$('#diciembreCalificacion').val();
          		marzoCalificacion=$('#marzoCalificacion').val();

          		CalificacionfinalAsignauraCalificacion=$('#CalificacionfinalAsignauraCalificacion').val();
         



	cadena="idNotaCalificacion=" + idNotaCalificacion +	
			"&idAlumnoCalificacion=" + idAlumnoCalificacion +	
			"&idAsignaturasCalificacion=" + idAsignaturasCalificacion +	
			"&AsignaturaCuestionCalificacion=" + AsignaturaCuestionCalificacion +		
			"&trimestre1Calificacion=" + trimestre1Calificacion +		
			"&trimestre2Calificacion=" + trimestre2Calificacion +		
			"&trimestre3Calificacion=" + trimestre3Calificacion +		
			"&integradorCalificacion=" + integradorCalificacion +		
			"&diciembreCalificacion=" + diciembreCalificacion +		
			"&marzoCalificacion=" + marzoCalificacion +		
			"&CalificacionfinalAsignauraCalificacion=" + CalificacionfinalAsignauraCalificacion;





if (idNotaCalificacion==="") {

	$.ajax({
		type:"POST",
		url:"php/Calificacionnota/AgregarDatosCalificacin.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});




}else{


	$.ajax({
		type:"POST",
		url:"php/Calificacionnota/EditarDatosCalificacion.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});


}

}






