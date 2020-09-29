<?php 

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	

	//$idAlumno=$_POST['idAlumno'];
	//$idcurso="";
	//$curso=$_POST['curso'];
	//$idasignatura="";
	//$asignatura=$_POST['asignatura'];

	
	$idcurso="";
	$curso=$_POST['curso'];
	$idasignatura="";
	$asignatura=$_POST['asignatura'];




	 $sql="SELECT * FROM `datoscurso` WHERE `curso`='$curso'";
         
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	$idcurso=$ver[0];
        	  }

    $sql="SELECT * FROM `datosasignatura` WHERE `idCurso`='$idcurso' AND `nombre`='$asignatura'";
         
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	$idasignatura=$ver[0];
        	  }


    $datosFinal="";

    




	echo $idasignatura;
	


 ?>