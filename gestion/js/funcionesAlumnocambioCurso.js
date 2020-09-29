function InformacionformcambioCurso(datos){

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


