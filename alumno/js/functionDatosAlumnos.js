function InformacionformAlumnoDatosUnicos(datos){

	d=datos.split('||');

function informetotslUnico(){
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
	
	informetotslUnico();

}




function editarDatosAlumnosUnicos(datos){

	d=datos.split('||');

	$('#idAlumnosDATOS').val(d[0]);
	$('#nombreAlumnosDATOS').val(d[1]);
	$('#dniAlumnosDATOS').html("D.N.I.:"+d[2]);
	
	$('#domicilioAlumnosDATOS').val(d[4]);
	$('#emailAlumnosDATOS').val(d[5]);
	$('#telefonoAlumnosDATOS').val(d[6]);
	$('#discapasidadAlumnosU').val(d[7]);
	
	$('#nombreTutorDATOS').val(d[11]);
	$('#dniTutorDATOS').val(d[12]);
	$('#TelefonoTutorDATOS').val(d[13]);
	
	$('#passLoginDATOS').val(d[15]);
	$('#passLogin2DATOS').val(d[15]);
	

}



function editarDatosAlumnosUnicosfinalaNTES(){
	alertify.confirm('ADMINISTRADOR', '¿Esta seguro de editar este registro?', 
					function(){ editarDatosAlumnosUnicosfinal() }
                , function(){ alertify.error('Se cancelo')});
}



function editarDatosAlumnosUnicosfinal(){

	idAlumnosDATOS=$('#idAlumnosDATOS').val();
	nombreAlumnosDATOS=$('#nombreAlumnosDATOS').val();	
	domicilioAlumnosDATOS=$('#domicilioAlumnosDATOS').val();
	emailAlumnosDATOS=$('#emailAlumnosDATOS').val();
	telefonoAlumnosDATOS=$('#telefonoAlumnosDATOS').val();	
	nombreTutorDATOS=$('#nombreTutorDATOS').val();
	dniTutorDATOS=$('#dniTutorDATOS').val();
	TelefonoTutorDATOS=$('#TelefonoTutorDATOS').val();
	passLoginDATOS=$('#passLoginDATOS').val();


	cadena="idAlumnosDATOS=" + idAlumnosDATOS +
			"&nombreAlumnosDATOS=" + nombreAlumnosDATOS + 			
			"&domicilioAlumnosDATOS=" + domicilioAlumnosDATOS +
			"&emailAlumnosDATOS=" + emailAlumnosDATOS+
			"&telefonoAlumnosDATOS=" + telefonoAlumnosDATOS+	
			"&nombreTutorDATOS=" + nombreTutorDATOS+
			"&dniTutorDATOS=" + dniTutorDATOS+
			"&TelefonoTutorDATOS=" + TelefonoTutorDATOS+
			"&passLoginDATOS=" + passLoginDATOS;



	$.ajax({
		type:"POST",
		url:"php/datosAlumnos/actualizar.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
			
				$('#datosAlumnoTABLA').load('datosAlumnos/datosAlumnos.php');
				$('#datosAlumnoEXTRAS').load('datosAlumnos/datosAlumnosExtras.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}