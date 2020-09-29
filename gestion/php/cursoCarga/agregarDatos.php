<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$p=$_POST['curso'];
	$a=$_POST['año'];
	$o=$_POST['especialidadT'];
	

	$sql="INSERT into datoscurso (curso,año,especialidadT)
								values ('$p','$a','$o')";
	mysqli_query($conexion,$sql);

	$sql4="SELECT * FROM `datoscurso` WHERE `curso` ='$p' and `año`='$a' and `especialidadT` ='$o'";

        $result4=mysqli_query($conexion,$sql4);
        while($ver=mysqli_fetch_row($result4)){ 
        	
        	$idCursoT=$ver[0];


        }


	$sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 
        	$modalidad=$ver[7];

        	if ($o===$modalidad) {
        		
        		$idInstut=$ver[0];

        	}

        }

    $sql3="SELECT * FROM `institucion_plan_estudio`";

        $result3=mysqli_query($conexion,$sql3);
        while($ver=mysqli_fetch_row($result3)){ 
        	$idInstut2=$ver[1];
        	$nombre2=$ver[3];
        	$anor=$ver[2];

        	if ($idInstut===$idInstut2 && $anor===$a) {


        		$sql="INSERT INTO `datosasignatura`(`idAsignatura`, `idCurso`, `nombre`, `horaCatedra`, `horario`) VALUES (null,'$idCursoT','$nombre2','','')";
				mysqli_query($conexion,$sql);
        		
        		






        	}

        }



echo "1";



 ?>