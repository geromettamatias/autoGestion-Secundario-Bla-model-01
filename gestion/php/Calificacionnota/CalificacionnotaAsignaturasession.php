<?php 

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idper2="";
	session_start();

	$idper=$_POST['valor'];

	$idper3=$_POST['valor3'];



	 $sql="SELECT * FROM `datoscurso` WHERE `idCurso`='$idper'";
         
        
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 


        	$idper2=$ver[1];



        	  }




	$_SESSION['BuscarValorMATERIASCaliCurso']=$idper2;

	$_SESSION['BuscarValorMATERIASCali']=$idper3;


	echo $idper2;
	


 ?>