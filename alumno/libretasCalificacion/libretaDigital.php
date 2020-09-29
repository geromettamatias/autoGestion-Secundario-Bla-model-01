
<?php 
 
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  session_start();
  $res="";

    $dniLoginT=$_SESSION['dniLoginT'];
    $usuarioA=$_SESSION['usuarioA'];

    $_SESSION['dniLoginT']=$dniLoginT;
    $_SESSION['usuarioA']=$usuarioA;


      if ((isset($_SESSION['dniLoginT']))) {


         $dniLoginT=$_SESSION['dniLoginT'];
         $_SESSION['dniLoginT']=$dniLoginT;


            $sql="SELECT * FROM `datosalumnos` WHERE `dniAlumnos`= '$dniLoginT'";


        

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $idAlumn=$ver[0];
          
        
     
    }    



   $res.='<table class="table table-dark  table-hover">
    
      <tr>
        <td>Asignatura</td>
        <td>1tr</td>
        <td>2tr</td>
        <td>3tr</td>
        <td>Int</td>
        <td>R.D</td>
        <td>R.M</td>
        <td>N.F</td>
  
      </tr>';

      


            $sql="SELECT * FROM `notaalumno` WHERE `idAlumnos`= '$idAlumn'";




        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8]."||".
               $ver[9];

               $ideAsignatura=$ver[2];



               $sql1="SELECT * FROM `datosasignatura` WHERE `idAsignatura`= '$ideAsignatura'";
                $result1=mysqli_query($conexion,$sql1);
                while($ver1=mysqli_fetch_row($result1)){ 

                  $asignatura=$ver1[2];
                }

       
          
        
      $res.='<tr>
       
        <td>'.$asignatura.'</td>
        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>
        <td>'.$ver[7].'</td>
        <td>'.$ver[8].'</td>
        <td>'.$ver[9].'</td></tr>';
    
    }

    




 
    $res.='</table>';


    }



if ($res!=="") {
  echo $res;
}else{
  echo "SIN DATOS";
}


 ?>