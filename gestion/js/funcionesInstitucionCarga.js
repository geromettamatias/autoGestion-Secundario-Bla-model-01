
function AGREGARDAOTOSInstut(datos2){


cadena="idInstitucion=" + datos2;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');

	
				$('#nombre').val(d[1]);
			    $('#cue').val(d[2]);
			    $('#domicilio').val(d[3]);
			    $('#tel').val(d[4]);
			    $('#email').val(d[5]);
			    $('#face').val(d[6]);
			    $('#modalt').val(d[7]);
			    $('#plan').val(d[8]);

				
			}
		}
	});






}

function   agregardatosinstitu(nombre,cue,domicilio,tel,email,face,modalt,plan){

	cadena="nombre=" + nombre + 
			"&cue=" + cue +
			"&domicilio=" + domicilio+
			"&tel=" + tel+
			"&email=" + email+
			"&face=" + face+
			"&modalt=" + modalt+
			"&plan=" + plan;

		

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				 
				alertify.success("agregado con exito :)");
				

			}else{

				alertify.error("Fallo el servidor :(");

				
			}
		}
	});

}




	eliminarPlanEstudioAsignatura2

function agregaformDffinstitucionInstitucion(idInstitucion){


cadena="idInstitucion=" + idInstitucion;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');


	
				$('#idInstitucion').val(d[0]);
				$('#nombreU').val(d[1]);
			    $('#cueU').val(d[2]);
			    $('#domicilioU').val(d[3]);
			    $('#telU').val(d[4]);
			    $('#emailU').val(d[5]);
			    $('#faceU').val(d[6]);
			    $('#modaltU').val(d[7]);
			    $('#planU').val(d[8]);
							
			}
		}
	});

	

}



function infoInstutucionPRINCIPIO(idInstitucion){


cadena="idInstitucion=" + idInstitucion;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');


				function visualiarInstitucion(){
	alertify.confirm('DATOS INSTITUCIONAL', '<b><u>NOMBRE DE LA INSTITUCIÓN:</u></b>'+d[1]+'<br>'
						+'<b><u>CUE:</u></b>'+ d[2]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[3]
						+'<br><b><u>TELEFONO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+d[5]
						+'<br><b><u>FACEBOOK:</u></b>'+ d[6]
						+'<br><br><b><u>MODALIDAD:</u></b>'+ d[7]
						+'<br><b><u>PLAN DE ESTUDIO:</u></b>'+ d[8], 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
}

visualiarInstitucion();

	
				
							
			}
		}
	});






}



function actualizaDatosnnnn(){

	idInstitucion=$('#idInstitucion').val();
	nombreU=$('#nombreU').val();
    cueU=$('#cueU').val();
    domicilioU=$('#domicilioU').val();
    telU=$('#telU').val();
    emailU=$('#emailU').val();
    faceU=$('#faceU').val();
    modaltU=$('#modaltU').val();
    planU=$('#planU').val();


	cadena= "idInstitucion=" + idInstitucion +
			"&nombreU=" + nombreU + 
			"&cueU=" + cueU +
			"&domicilioU=" + domicilioU+
			"&telU=" + telU+
			"&emailU=" + emailU+
			"&faceU=" + faceU+
			"&modaltU=" + modaltU+
			"&planU=" + planU;


	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}


function preguntarSiNoTinstituionInstucon(idInstitucion){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosInstitucionTOTA(idInstitucion) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosInstitucionTOTA(idInstitucion){

	cadena="idInstitucion=" + idInstitucion;


	

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}



function cargaAsignaturaT(idInstitucion){

	

	$('#idInstitucionP').val(idInstitucion);

	$.ajax({
          type:"post",
          data:'valor2=' + idInstitucion,
          url:"php/institucionalCarga/crea.php",
          success:function(r){
           $('#PlanAñoAsignatura').load("php/institucionalCarga/selecToPlanStudio.php");

          }
        });



	


}


function guardarAsignaturaPlanAño(idInstitucionP,idPlanAsig,planAño,planAsignatura){

	


cadena= "idInstitucionP=" + idInstitucionP +
			"&idPlanAsig=" + idPlanAsig + 
			"&planAño=" + planAño +
			"&planAsignatura=" + planAsignatura;


	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/guardarPlanStudio.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){




				cargaAsignaturaT(idInstitucionP);
				


				
				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});



}








function eliminarPlanEstudioAsignatura2(idPlanAsig){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosInstitucion(idPlanAsig) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosInstitucion(idPlanAsig){

	cadena="idPlanAsig=" + idPlanAsig;

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarPlanStudio.php",
			data:cadena,
			success:function(resul){
				
				if(resul>0){


					valor=$('#idInstitucionP').val();
				
					cargaAsignaturaT(valor);
				

					
					alertify.success("Actualizado con exito :)");
					
				}else{
					alertify.error("Fallo el servidor :(");
				
				}
			}
		});
}




function editarPlanEstudioAsignatura2(idPlanAsig){

	cadena="idPlanAsig=" + idPlanAsig;

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/selecPlanStudio.php",
			data:cadena,
			success:function(r){


				d=r.split('||');

					
					$('#idPlanAsig').val(d[0]);
					$('#idInstitucionP').val(d[1]);
					$('#planAño').val(d[2]);
					$('#planAsignatura').val(d[3]);



			}
		});
}