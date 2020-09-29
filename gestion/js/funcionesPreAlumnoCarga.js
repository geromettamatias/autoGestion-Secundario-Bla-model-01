function agregaformALUtotalEEEpa(datos){

	d=datos.split('||');
	
	$('#idAlumnosUpa').val(d[0]);
	$('#nombreAlumnosUpa').val(d[1]);
	$('#dniAlumnosUpa').val(d[2]);
	$('#cuilAlumnosUpa').val(d[3]);
	$('#domicilioAlumnosUpa').val(d[4]);
	$('#emailAlumnosUpa').val(d[5]);
	$('#telefonoAlumnosUpa').val(d[6]);
	$('#discapasidadAlumnosUpa').val(d[7]);
	
	$('#nLegajoAlumnoUpa').val(d[9]);
	$('#legajoSituacionUpa').val(d[10]);
	$('#nombreTutorUpa').val(d[11]);
	$('#dniTutorUpa').val(d[12]);
	$('#TelefonoTutorUpa').val(d[13]);
	$('#obserbacionGeneralUpa').val(d[14]);

	$('#passLoginUpa').val(d[15]);
	$('#situacionAltaUpa').val(d[16]);
	$('#obserbacionAltaUpa').val(d[17]);





	  lanAñoAlumnoPRET2=d[18];
   especialidadAlumnoPRE2=d[19];


    cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2);

 


	$('#lanAñoAlumnoPRET2').val(d[18]);





	

cadena="especialidadAlumnoPREtt=" + d[19];



	$.ajax({
		type:"POST",
		url:"php/preAlumnoCarga/orientacion.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){

				$('#especialidadAlumnoPREtt').html(r);
				
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});







}



function agregaformALUtotalpa(datos){

	d=datos.split('||');

	$('#idAlumnosUpa').val(d[0]);
	$('#nombreAlumnosUpa').val(d[1]);
	$('#dniAlumnosUpa').val(d[2]);
	$('#cuilAlumnosUpa').val(d[3]);
	$('#domicilioAlumnosUpa').val(d[4]);
	$('#emailAlumnosUpa').val(d[5]);
	$('#telefonoAlumnosUpa').val(d[6]);
	$('#discapasidadAlumnosUpa').val(d[7]);
	$('#cursoAlumnosUpa').val(d[8]);

	$('#nLegajoAlumnoUpa').val(d[9]);
	$('#legajoSituacionUpa').val(d[10]);
	
	$('#nombreTutorUpa').val(d[11]);
	$('#dniTutorUpa').val(d[12]);
	$('#TelefonoTutorUpa').val(d[13]);
	$('#obserbacionGeneralUpa').val(d[14]);
	
	$('#passLoginUpa').val(d[15]);
	$('#situacionAltaUpa').val(d[16]);
	$('#obserbacionAltaUpa').val(d[17]);
	
}








function cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2){




	cadena="lanAñoAlumnoPRET2=" + lanAñoAlumnoPRET2 + 
			"&especialidadAlumnoPRE2=" + especialidadAlumnoPRE2;


	$.ajax({
		type:"POST",
		url:"php/preAlumnoCarga/crearsessionTotal.php",
		data:cadena,
		success:function(res){
			if(res==1){
				
		
				$("#cursoAlumnosUpa").load('php/preAlumnoCarga/buscarCurso.php');


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}





























function actualizaDatosAlumnototal1pa(){

	idAlumnosU=$('#idAlumnosUpa').val();
	nombreAlumnosU=$('#nombreAlumnosUpa').val();
	dniAlumnosU=$('#dniAlumnosUpa').val();
	cuilAlumnosU=$('#cuilAlumnosUpa').val();
	domicilioAlumnosU=$('#domicilioAlumnosUpa').val();
	emailAlumnosU=$('#emailAlumnosUpa').val();
	telefonoAlumnosU=$('#telefonoAlumnosUpa').val();
	discapasidadAlumnosU=$('#discapasidadAlumnosUpa').val();
	
	nLegajoAlumnoU=$('#nLegajoAlumnoUpa').val();
	legajoSituacionU=$('#legajoSituacionUpa').val();
	nombreTutorU=$('#nombreTutorUpa').val();
	dniTutorU=$('#dniTutorUpa').val();
	TelefonoTutorU=$('#TelefonoTutorUpa').val();
	obserbacionGeneralU=$('#obserbacionGeneralUpa').val();

	passLoginU=$('#passLoginUpa').val();
	situacionAltaU=$('#situacionAltaUpa').val();
	obserbacionAltaU=$('#obserbacionAltaUpa').val();


	lanAñoAlumnoPRET2=$('#lanAñoAlumnoPRET2').val();
	especialidadAlumnoPRE2=$('#especialidadAlumnoPRE2').val();
	cursoAlumnos2=$('#cursoAlumnos2').val();


	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			"&cursoAlumnos2=" + cursoAlumnos2+
			"&nLegajoAlumnoU=" + nLegajoAlumnoU+
			"&legajoSituacionU=" + legajoSituacionU+
			"&nombreTutorU=" + nombreTutorU+
			"&dniTutorU=" + dniTutorU+
			"&TelefonoTutorU=" + TelefonoTutorU+
			"&obserbacionGeneralU=" + obserbacionGeneralU+
			"&passLoginU=" + passLoginU+
			"&situacionAltaU=" + situacionAltaU+
			"&obserbacionAltaU=" + obserbacionAltaU+
			"&lanAñoAlumnoPRET2=" + lanAñoAlumnoPRET2+
			"&especialidadAlumnoPRE2=" + especialidadAlumnoPRE2;


	$.ajax({
		type:"POST",
		url:"php/preAlumnoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

	
	




function preguntarSiagregartpa(datos){
	alertify.confirm('Ingresar los datos', '¿Esta seguro de ingresar este registro en la Base de Datos?', 
					function(){ agregarDatosCursosAlumnopa(datos) }
                , function(){ alertify.error('Se cancelo')});
}


function agregarDatosCursosAlumnopa(datos){

	d=datos.split('||');

	idAlumnos=d[0];
	idAlumnosU=d[0];
	nombreAlumnosU=d[1];
	dniAlumnosU=d[2];
	cuilAlumnosU=d[3];
	domicilioAlumnosU=d[4];
	emailAlumnosU=d[5];
	telefonoAlumnosU=d[6];
	discapasidadAlumnosU=d[7];
	cursoAlumnosU=d[8];
	nLegajoAlumnoU=d[9];
	legajoSituacionU=d[10];
	nombreTutorU=d[11];
	dniTutorU=d[12];
	TelefonoTutorU=d[13];
	obserbacionGeneralU=d[14];
	passLoginU=d[15];
	situacionAltaU=d[16];
	obserbacionAltaU=d[17];
	añoU=d[18];
	orientacionU=d[19];



	
	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			"&cursoAlumnosU=" + cursoAlumnosU+
			"&nLegajoAlumnoU=" + nLegajoAlumnoU+
			"&legajoSituacionU=" + legajoSituacionU+
			"&nombreTutorU=" + nombreTutorU+
			"&dniTutorU=" + dniTutorU+
			"&TelefonoTutorU=" + TelefonoTutorU+
			"&obserbacionGeneralU=" + obserbacionGeneralU+
			"&passLoginU=" + passLoginU+
			"&situacionAltaU=" + situacionAltaU+
			"&obserbacionAltaU=" + obserbacionAltaU+
			"&añoU=" + añoU+
			"&orientacionU=" + orientacionU;



		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/ingresarAlumno.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');

					$('#AlumnoPlanta').load('cargaAlumno/AlumnoTabla.php');
					alertify.success("Se agrego con exitos");
				}else{
					if(r==0){
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.error("El Usuario ya esta registrado");

					preguntarSiNoDuplpa(idAlumnosU);


				}else{
					alertify.error("Fallo el servidor :(");
				}
				}
			}
		});
}


function preguntarSiNoDuplpa(idAlumnosU){
	alertify.confirm('DUPLICADO DE DATOS', 'El alumno ya se encuentra registrado, ¿Desea eliminar este registro? ', 
					function(){ eliminarDatosAlumnopat(idAlumnosU) }
                , function(){ alertify.error('Se cancelo')});
}



function eliminarDatosAlumnopat(idAlumnosU){

	cadena="idAlumnos=" + idAlumnosU;

		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}














function InformacionformAlumnopa(datos){

	d=datos.split('||');

function informetotsl(){
	alertify.confirm('Informe de Alumno', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<br><b><u>DNI:</u></b>'+ d[2]
						+'<br><b><u>CUIL:</u></b>'+ d[3]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+ d[5]
						+'<br><b><u>TELEFONO:</u></b>'+ d[6]
						+'<br><b><u>DISCAPASIDAD:</u></b>'+ d[7]

						+'<br><b><u>AÑO DE INSCRIP:</u></b>'+ d[18]
						+'<br><b><u>ORIENTACIÓN:</u></b>'+ d[19]
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


function preguntarSiNopa(idAlumnos){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosAlumnopa(idAlumnos) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosAlumnopa(idAlumnos){

	cadena="idAlumnos=" + idAlumnos;

		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


