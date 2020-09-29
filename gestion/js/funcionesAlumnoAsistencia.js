function InformacionformAsistencia(datos){

	d=datos.split('||');

function informetotsl(){
	alertify.confirm('Informe de Alumno', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<br><b><u>DNI:</u></b>'+ d[2]
						+'<br><b><u>CUIL:</u></b>'+ d[3]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+ d[5]
						+'<br><b><u>TELEFONO:</u></b>'+ d[6]
						+'<br><b><u>DISCAPASIDAD:</u></b>'+ d[7]
						+'<br><b><u>CURSO:</u></b>'+ d[8]
						+'<br><b><u>APELLIDO Y NOMBRE TUTOR:</u></b>'+ d[11]
						+'<br><b><u>DNI TUTOR:</u></b>'+ d[12]
						+'<br><b><u>TELEFONO TUTOR:</u></b>'+ d[13]
						+'<br><b><u>OBSERVACIÓN:</u></b>'+ d[14]
						+'<br><br><b><u>N° LEGAJO:</u></b>'+ d[9]
						+'<br><b><u>SITUACIÓN DEL LEGAJO:</u></b>'+ d[10], 
					function(){ alertify.success('Fin de la operación') }
                , function(){ alertify.error('Se cancelo')});
}
	
	informetotsl();

}


function AlumnoAsistenciaInasistencia(datos){

	d=datos.split('||');

	vari1=$('#idAlumnosFAsistencia').val(d[0]);
	vari2=$('#buscarInasistenciaAsistencia').val();

	buscartroinasistenciaAsistencia();

	
	}








function buscaInasistenciaTotalAsistencia(dato){


 
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


function agregardatosinasistenciaAsistencia(idAsistencia,idAlumnosF,cantidadF,fechaF,justificoF){

	cadena=	"&idAsistencia=" + idAsistencia +
			"&idAlumnosF=" + idAlumnosF +
			"&cantidadF=" + cantidadF +
			"&fechaF=" + fechaF+
			"&justificoF=" + justificoF;




if (idAsistencia==="") {


	$.ajax({
		type:"POST",
		url:"php/asistenciaAlumno/pro.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				alertify.success("se guardo con exito :)");

				buscartroinasistenciaAsistencia();
				limpiarInaAsistencia();
				
			}else{

				if(r==0){

					function fechaExisteAsistencia(){
	alertify.confirm('Imporante', 'Ya se encuentra registrado esta fecha !!', 
					function(){ alertify.error('Se cancelo')}
                , function(){ alertify.error('Se cancelo')});
}

					fechaExisteAsistencia();

					limpiarInaAsistencia();


				}else{

						alertify.error("Fallo el servidor :(");

				}



					
				



				
			}
		}
	});

}else{

	
	editarasignaturainasistenciaAsistencia(cadena);

}


}


function editarasignaturainasistenciaAsistencia(cadena){
	alertify.confirm('Editar Datos', '¿Esta seguro de editar este registro?', 
					function(){ editarasignaturainasistenciaAsistenciaAsistencia(cadena) }
                , function(){ alertify.error('Se cancelo')});

	
}


function editarasignaturainasistenciaAsistenciaAsistencia(cadena){

	

	$.ajax({
		type:"POST",
		url:"php/asistenciaAlumno/proActualiza.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				alertify.success("se guardo con éxito :)");

				buscartroinasistenciaAsistencia();
				limpiarInaAsistencia();
				
			}else{
				alertify.error("Fallo el servidor :(");
				
			}
		}
	});


}


function editarInasistenciaAsistencia(idAsignatura){




	//$('#idasignatura').val(idAsignatura);
	//$('#cursoA').val(curso);
	//$('#asignatiraA').val(dasignatura4);
	//$('#horasCatedrasA').val(horasCatedras);

	cadenato="idAsignatura=" + idAsignatura;


$.ajax({
		type:"POST",
		url:"php/asistenciaAlumno/editarasig.php",
		data:cadenato,
		success:function(datos){
			if(datos===""){

				alertify.error("Fallo el servidor :(");


			}else{


				d=datos.split('||');

				

				$('#idAsistenciaAsistencia').val(d[0]);
				$('#idAlumnosFAsistencia').val(d[1]);
				$('#cantidadFAsistencia').val(d[2]);
				$('#fechaFAsistencia').val(d[3]);
				$('#justificoFAsistencia').val(d[4]);

		

				alertify.success('SE SELECCIÓN EN "CARGA DE DATOS"');
			

				
							}
		}
	});


}


function preguntarSiNourainasistenciaAsistencia(idAsignatura){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosAsignaturaasisAsistencia(idAsignatura) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosAsignaturaasisAsistencia(idAsignatura){

	cadena="idAsignatura=" + idAsignatura;



		$.ajax({
			type:"POST",
			url:"php/asistenciaAlumno/eliminarinasistencia.php",
			data:cadena,





			success:function(r){
				if(r==1){
					buscartroinasistenciaAsistencia();
					alertify.success("Eliminado con exito!");
					limpiarInaAsistencia();
					
				}else{
					
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

function limpiarInaAsistencia(){


$('#idAsistenciaAsistencia').val("");
				
				$('#cantidadFAsistencia').val(0.5);
				
				$('#justificoFAsistencia').val("SIN-DATOS");


}