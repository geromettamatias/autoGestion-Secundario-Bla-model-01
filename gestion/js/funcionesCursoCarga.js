
function agregardatosCursoCursoNuevo(curso,año,especialidadT){

	cadena="curso=" + curso+
			"&año=" + año +
			"&especialidadT=" + especialidadT;



	$.ajax({
		type:"POST",
		url:"php/cursoCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');
				$('#EXTRASCARGAPANTEL').load('cargaPersonal/personalExtras.php');
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				$('#EXTRASCARGAALUMNO').load('cargaAlumno/alumnoExtras.php');
				$('#AlumnoPlantaBuscador').load('cargaAlumno/alumnoTablaBUSCAR.php');

				$('#preAlumnoBuscador').load('preAlumno/prAlumnoTablaBUSCAR.php');
				$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
				$('#preAlumnoExtras').load('preAlumno/prAlumnoExtras.php');

				$('#preDocenteBuscador').load('PreDocente/prPersonalTablaBUSCAR.php');
				$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
				$('#preDocenteExtras').load('PreDocente/prPersonalExtras.php');
				
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaformCurso(datos){

	d=datos.split('||');

	$('#idCurso').val(d[0]);
	$('#cursou').val(d[1]);
	$('#añou').val(d[2]);




    var dato="especialidadT="+d[3];
    
    $.ajax({
      url: 'php/cursoCarga/especiEdj.php',
      type: 'POST',
      data: dato,
    })
    .done(function(res){
      $('#especuEdu').html(res);
    })
    .fail(function(){
      console.log("error");
    })
    .always(function(){
      console.log("completo");
    })




}

function cargEspecial(){

	$('#especu').load("php/cursoCarga/especi.php");
	
}








function actualizaDatosCursoCursoNuevo(){


	idCurso=$('#idCurso').val();
	curso=$('#cursou').val();
	año=$('#añou').val();
	especialidadT2=$('#especialidadT2').val();

	cadena= "idCurso=" + idCurso +
			"&curso=" + curso +
			"&año=" + año +
			"&especialidadT2=" + especialidadT2;


	$.ajax({
		type:"POST",
		url:"php/cursoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');

				$('#EXTRASCARGAPANTEL').load('cargaPersonal/personalExtras.php');
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				$('#EXTRASCARGAALUMNO').load('cargaAlumno/alumnoExtras.php');
				$('#AlumnoPlantaBuscador').load('cargaAlumno/alumnoTablaBUSCAR.php');

				$('#preAlumnoBuscador').load('preAlumno/prAlumnoTablaBUSCAR.php');
				$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
				$('#preAlumnoExtras').load('preAlumno/prAlumnoExtras.php');

				$('#preDocenteBuscador').load('PreDocente/prPersonalTablaBUSCAR.php');
				$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
				$('#preDocenteExtras').load('PreDocente/prPersonalExtras.php');
				

				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoCurso(idCurso){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(idCurso) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(idCurso){

	cadena="idCurso=" + idCurso;

		$.ajax({
			type:"POST",
			url:"php/cursoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');

					$('#EXTRASCARGAPANTEL').load('cargaPersonal/personalExtras.php');
				$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
				$('#EXTRASCARGAALUMNO').load('cargaAlumno/alumnoExtras.php');
				$('#AlumnoPlantaBuscador').load('cargaAlumno/alumnoTablaBUSCAR.php');

				$('#preAlumnoBuscador').load('preAlumno/prAlumnoTablaBUSCAR.php');
				$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
				$('#preAlumnoExtras').load('preAlumno/prAlumnoExtras.php');

				$('#preDocenteBuscador').load('PreDocente/prPersonalTablaBUSCAR.php');
				$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
				$('#preDocenteExtras').load('PreDocente/prPersonalExtras.php');
				
				
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


// esta parte es para las funciones de la asignaturas



function idCursoto(idCurso){

	
	$('#idCursoUT').val(idCurso);

	busca2=idCurso;

	buscarAsignaturaCursoNuevoTO(busca2);

	
	}


//buscartro()

function buscarAsignaturaCursoNuevoTO(busca2){

    var busca2=document.getElementById('idCursoUT').value;
    var dato="da1="+busca2;
    
    $.ajax({
      url: 'php/cursoCarga/tablaAsignatura.php',
      type: 'POST',
      data: dato,
    })
    .done(function(res){
      $('#resultadoBusquedaAsignatura').html(res);
    })
    .fail(function(){
      console.log("error");
    })
    .always(function(){
      console.log("completo");
    })




};




function editarAsignaturaCursoTotaltt(idAsignatura){



	cadenato="idAsignatura=" + idAsignatura;



$.ajax({
		type:"POST",
		url:"php/cursoCarga/editarAsignatura.php",
		data:cadenato,
		success:function(datos){
			if(datos===""){

				alertify.error("Fallo el servidor :(");


			}else{

				d=datos.split('||');



				$('#idAsignaturaUT').val(d[0]);
				$('#idCursoUT').val(d[1]);
				$('#cursoA').val(d[2]);
				$('#horasCatedrasA').val(d[3]);
				$('#horarioA').val(d[4]);
				alertify.success("Selecciono con exito :)");
							}
		}
	});


}





function preguntarSiNouraAsignatCurso(idAsignatura){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosAsignaturaCurso(idAsignatura) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosAsignaturaCurso(idAsignatura){

	cadena="idAsignatura=" + idAsignatura;

		$.ajax({
			type:"POST",
			url:"php/cursoCarga/eliminarDatosAsignaturaCurso.php",
			data:cadena,





			success:function(r){
				if(r==1){
					buscarAsignaturaCursoNuevoTO();
					alertify.success("Eliminado con exito!");
					LimpiezaAsignatura();
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}






function LimpiezaAsignatura(){

var limpieza="";

	
$('#idAsignaturaUT').val(limpieza);

$('#cursoA').val(limpieza);
$('#horasCatedrasA').val(limpieza);
$('#horarioA').val(limpieza);


}



function agregardatosAsignaturaCURSO(idAsignaturaUT,idCursoUT,cursoA,horasCatedrasA,horarioA){

	cadena=	"&idAsignaturaUT=" + idAsignaturaUT +
			"&idCursoUT=" + idCursoUT +
			"&cursoA=" + cursoA +
			"&horasCatedrasA=" + horasCatedrasA+
			"&horarioA=" + horarioA;


if (idAsignaturaUT==="") {


	$.ajax({
		type:"POST",
		url:"php/cursoCarga/agregarOeditarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				alertify.success("se guardo con exito :)");

				buscarAsignaturaCursoNuevoTO();
				LimpiezaAsignatura();
			}else{


					alertify.error("Fallo el servidor :(");
				



				
			}
		}
	});

}else{

	
	editarasignaturaCursoModificadoto(cadena);

}


}








function editarasignaturaCursoModificadoto(cadena){
	alertify.confirm('Editar Datos', '¿Esta seguro de editar este registro?', 
					function(){ editarasignaturaProfesorTotalModificadato(cadena) }
                , function(){ alertify.error('Se cancelo')});
}


function editarasignaturaProfesorTotalModificadato(cadena){

	

	$.ajax({
		type:"POST",
		url:"php/cursoCarga/actualizarDatosAsignatura.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				alertify.success("se guardo con éxito :)");

				buscarAsignaturaCursoNuevoTO();
				LimpiezaAsignatura();
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});


}