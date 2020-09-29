<?php 

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	

	//$idAlumno=$_POST['idAlumno'];
	//$idcurso="";
	//$curso=$_POST['curso'];
	//$idasignatura="";
	//$asignatura=$_POST['asignatura'];

	$idAlumno=$_POST['idAlumno'];
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
    $cont=0;

     $sql="SELECT * FROM `notaalumno` WHERE `idAlumnos`='$idAlumno' AND `idAsignaturas`='$idasignatura'";
         
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	
        	$datosFinal=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8]."||".
               $ver[9];

               $cont=1;



        	  }


if($cont===1){
  echo $datosFinal;
  
}else{


    $datosFinal=""."||".
               ""."||".
               $idasignatura."||".
               ""."||".
               ""."||".
               ""."||".
               ""."||".
               ""."||".
               ""."||".
               "";

               
 echo $datosFinal;


}

	
	


 ?>