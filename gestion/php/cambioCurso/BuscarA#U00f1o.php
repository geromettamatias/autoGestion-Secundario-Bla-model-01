<?php 
	session_start();

	$añoT=$_POST['añoT'];

	$_SESSION['añoT']=$añoT;


	$espesialidadTotoal=$_POST['espesialidadTotoal'];

	$_SESSION['espesialidadTotoal']=$espesialidadTotoal;



	$cursoAlumnosCcambioCursoTOTAL=$_POST['cursoAlumnosCcambioCursoTOTAL'];

	$_SESSION['cursoAlumnosCcambioCursoTOTAL']=$cursoAlumnosCcambioCursoTOTAL;

	

	echo "1";

 ?>