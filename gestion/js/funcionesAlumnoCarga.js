function agregardatosAlumnosAlumno(nombreAlumnos,dniAlumnos,cuilAlumnos,domicilioAlumnos,emailAlumnos,telefonoAlumnos,discapasidadAlumnos,cursoAlumnos,nLegajoAlumno,legajoSituacion,nombreTutor,dniTutor,TelefonoTutor,obserbacionGeneral,planAñoAlumno,especialidadAlumno){

	cadena="nombreAlumnos=" + nombreAlumnos + 
			"&dniAlumnos=" + dniAlumnos +
			"&cuilAlumnos=" + cuilAlumnos +
			"&domicilioAlumnos=" + domicilioAlumnos +
			"&emailAlumnos=" + emailAlumnos+
			"&telefonoAlumnos=" + telefonoAlumnos+
			"&discapasidadAlumnos=" + discapasidadAlumnos+
			"&cursoAlumnos=" + cursoAlumnos+
			"&nLegajoAlumno=" + nLegajoAlumno+
			"&legajoSituacion=" + legajoSituacion+
			"&nombreTutor=" + nombreTutor+
			"&dniTutor=" + dniTutor+
			"&TelefonoTutor=" + TelefonoTutor+
			"&obserbacionGeneral=" + obserbacionGeneral+
			"&planAñoAlumno=" + planAñoAlumno+
			"&especialidadAlumno=" + especialidadAlumno;



	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				 
				alertify.success("agregado con exito :)");
				
				
			}else{
				
				alertify.error("Fallo el servidor :(");
				
			}
		}
	});

	LimpiezaAlumnoTotalAlumno();

}


function agregaformALUBuscaAlumno(datos){

	d=datos.split('||');

	$('#idAlumnosU').val(d[0]);
	$('#nombreAlumnosU').val(d[1]);
	$('#dniAlumnosU').val(d[2]);
	$('#cuilAlumnosU').val(d[3]);
	$('#domicilioAlumnosU').val(d[4]);
	$('#emailAlumnosU').val(d[5]);
	$('#telefonoAlumnosU').val(d[6]);
	$('#discapasidadAlumnosU').val(d[7]);
	$('#cursoAlumnosU').val(d[8]);
	$('#nLegajoAlumnoU').val(d[9]);
	$('#legajoSituacionU').val(d[10]);
	$('#nombreTutorU').val(d[11]);
	$('#dniTutorU').val(d[12]);
	$('#TelefonoTutorU').val(d[13]);
	$('#obserbacionGeneralU').val(d[14]);
	
	
}



function agregaformALUAlumno(datos){

	d=datos.split('||');

	$('#idAlumnosU').val(d[0]);
	$('#nombreAlumnosU').val(d[1]);
	$('#dniAlumnosU').val(d[2]);
	$('#cuilAlumnosU').val(d[3]);
	$('#domicilioAlumnosU').val(d[4]);
	$('#emailAlumnosU').val(d[5]);
	$('#telefonoAlumnosU').val(d[6]);
	$('#discapasidadAlumnosU').val(d[7]);
	$('#cursoAlumnosU').val(d[8]);
	$('#nLegajoAlumnoU').val(d[9]);
	$('#legajoSituacionU').val(d[10]);
	$('#nombreTutorU').val(d[11]);
	$('#dniTutorU').val(d[12]);
	$('#TelefonoTutorU').val(d[13]);
	$('#obserbacionGeneralU').val(d[14]);
	
	
}


function actualizaDatosAlumnoAlumno(){

	idAlumnosU=$('#idAlumnosU').val();
	nombreAlumnosU=$('#nombreAlumnosU').val();
	dniAlumnosU=$('#dniAlumnosU').val();
	cuilAlumnosU=$('#cuilAlumnosU').val();
	domicilioAlumnosU=$('#domicilioAlumnosU').val();
	emailAlumnosU=$('#emailAlumnosU').val();
	telefonoAlumnosU=$('#telefonoAlumnosU').val();
	discapasidadAlumnosU=$('#discapasidadAlumnosU').val();
	nLegajoAlumnoU=$('#nLegajoAlumnoU').val();
	legajoSituacionU=$('#legajoSituacionU').val();
	nombreTutorU=$('#nombreTutorU').val();
	dniTutorU=$('#dniTutorU').val();
	TelefonoTutorU=$('#TelefonoTutorU').val();
	obserbacionGeneralU=$('#obserbacionGeneralU').val();


	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			"&nLegajoAlumnoU=" + nLegajoAlumnoU+
			"&legajoSituacionU=" + legajoSituacionU+
			"&nombreTutorU=" + nombreTutorU+
			"&dniTutorU=" + dniTutorU+
			"&TelefonoTutorU=" + TelefonoTutorU+
			"&obserbacionGeneralU=" + obserbacionGeneralU;



	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
			
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

















function agregaformALUCursoAlumno(datos){

	d=datos.split('||');

	idAlumnosC=$('#idAlumnosC').val(d[0]);
	
	$('#planAñoAlumnoU').val(d[16]);

	$('#especialidadAlumnoU').val(d[17]);
	


	cadena="planAñoAlumnoU=" + d[16] +			
			"&especialidadAlumnoU=" + d[17] +			
			"&curo=" + d[8];



	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/cursoBuscadoEDITAR.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){

			
				$('#cursoTussU').html(r);
		



				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});


	
	
	
}


function actualizaDatosAlumnocursoAlumno(){

	idAlumnosC=$('#idAlumnosC').val();

	cursoAlumnosU=$('#cursoAlumnosU').val();
	planAñoAlumnoU=$('#planAñoAlumnoU').val();	
	especialidadAlumnoU=$('#especialidadAlumnoU').val();
	


	cadena="idAlumnosC=" + idAlumnosC +			
			"&cursoAlumnosU=" + cursoAlumnosU +			
			"&planAñoAlumnoU=" + planAñoAlumnoU +			
			"&especialidadAlumnoU=" + especialidadAlumnoU;


	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/actualizaDatosCurso.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}























function preguntarSiNoAlumno(idAlumnos){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosAlumno(idAlumnos) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosAlumno(idAlumnos){

	cadena="idAlumnos=" + idAlumnos;

		$.ajax({
			type:"POST",
			url:"php/alumnoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}



// nuevos


function InformacionformAlumnoTAlumno(datos2){

	d=datos2.split('||');

	$('#idAlumnosUx2').html(d[0]);
	$('#nombreAlumnosUx2').html(d[1]);
	$('#dniAlumnosUx2').html(d[2]);
	$('#cuilAlumnosUx2').html(d[3]);
	$('#domicilioAlumnosUx2').html(d[4]);
	$('#emailAlumnosUx2').html(d[5]);
	$('#telefonoAlumnosUx2').html(d[6]);
	$('#discapasidadAlumnosUx2').html(d[7]);
	$('#cursoAlumnosUx2').html(d[8]);
	$('#nLegajoAlumnoUx2').html(d[9]);
	$('#legajoSituacionUx2').html(d[10]);
	$('#nombreTutorUx2').html(d[11]);
	$('#dniTutorUx2').html(d[12]);
	$('#TelefonoTutorUx2').html(d[13]);
	$('#obserbacionGeneralUx2').html(d[14]);
	

}

function InformacionformAlumnoAlumno(datos){

	d=datos.split('||');

	$('#idAlumnosUx').html(d[0]);
	$('#nombreAlumnosUx').html(d[1]);
	$('#dniAlumnosUx').html(d[2]);
	$('#cuilAlumnosUx').html(d[3]);
	$('#domicilioAlumnosUx').html(d[4]);
	$('#emailAlumnosUx').html(d[5]);
	$('#telefonoAlumnosUx').html(d[6]);
	$('#discapasidadAlumnosUx').html(d[7]);
	$('#cursoAlumnosUx').html(d[8]);
	$('#nLegajoAlumnoUx').html(d[9]);
	$('#legajoSituacionUx').html(d[10]);
	$('#nombreTutorUx').html(d[11]);
	$('#dniTutorUx').html(d[12]);
	$('#TelefonoTutorUx').html(d[13]);
	$('#obserbacionGeneralUx').html(d[14]);



	$('#planAñoAlumnoUx').html(d[16]);
	$('#especialidadAlumnoUx').html(d[17]);




	

}


function LimpiezaAlumnoTotalAlumno(){

	lipi="";

	$('#nombreAlumnos').val(lipi);
	$('#dniAlumnos').val(lipi);
	$('#cuilAlumnos').val(lipi);
	$('#domicilioAlumnos').val(lipi);
	$('#emailAlumnos').val(lipi);
	$('#telefonoAlumnos').val(lipi);
	$('#discapasidadAlumnos').val(lipi);
	$('#cursoAlumnos').val(lipi);
	$('#nLegajoAlumno').val(lipi);
	$('#legajoSituacion').val(lipi);
	$('#nombreTutor').val(lipi);
	$('#dniTutor').val(lipi);
	$('#TelefonoTutor').val(lipi);
	$('#obserbacionGeneral').val(lipi);
	

}

function MandarOrientacionAño(planAñoAlumno,especialidadAlumno){;




	cadena="planAñoAlumno=" + planAñoAlumno +
			"&especialidadAlumno=" + especialidadAlumno;



	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/cursoBuscado.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){
			
				$('#cursoTuss').html(r);
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});


}







function MandarOrientacionAñoU(planAñoAlumnoU,especialidadAlumnoU){;




	cadena="planAñoAlumnoU=" + planAñoAlumnoU +
			"&especialidadAlumnoU=" + especialidadAlumnoU;



	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/cursoBuscadoFinal.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){
			
				$('#cursoTussU').html(r);
				
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});


}
















function buscarDNIAlumnoNuevoAlumno(dniAlumnos){

    
          var buscar="dniAlumnos="+dniAlumnos;

          $.ajax({
            url: 'php/alumnoCarga/buscarAlumnoAgregarNuevo.php',
            type: 'POST',
            data: buscar,
          })
          .done(function(res){

            $('#resultadoBusquedaDniAlumnoAgregar').html(res);


          })
          .fail(function(){
            console.log("error");
          })
          .always(function(){
            console.log("completo");
          })


          $.ajax({
            url: 'php/alumnoCarga/buscarAlumnoAgregarNuevoFinal.php',
            type: 'POST',
            data: buscar,
          })
          .done(function(res){

           $('#resultadoBusquedaDniAlumnoAgregar2').val(res);


          })
          .fail(function(){
            console.log("error");
          })
          .always(function(){
            console.log("completo");
          })


}

window.onload= function inicio(){
		
$('#buscadorvivo').val("");





	};






