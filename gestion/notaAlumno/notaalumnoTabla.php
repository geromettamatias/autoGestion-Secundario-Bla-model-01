
<?php 
  session_start();
  require_once  "../../libreriasConexion/conexion.php";
 $conexion=conexion();

  

 ?>

 

<div id="conteiner">
<div class="row">
  <div class="col-sm-12"><p>

   
<h3><p style="color:#F4F6F6;"><mark>NOTAS</mark></p></h3>
<b>
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        <td>CURSO</td>
        <td>NOTAS</td>
  
      </tr>

      <?php 





      if ((isset($_SESSION['BuscarCursonotaAlumno'])) && (isset($_SESSION['BuscarValorcambioCurso']))) {


         $idpC=$_SESSION['BuscarCursonotaAlumno'];
             $_SESSION['BuscarCursonotaAlumno']=$idpC;

        $idp=$_SESSION['BuscarValornotaAlumno'];
             $_SESSION['BuscarValornotaAlumno']=$idp;


       if ($idpC==="0") {
         $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";
       }else{


        $sql="SELECT * FROM `datosalumnos` WHERE (`cursoAlumnos`= '$idpC') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ";

       }

        


     
      }else{


        if(isset($_SESSION['BuscarValornotaAlumno'])){


            $idp=$_SESSION['BuscarValornotaAlumno'];
             $_SESSION['BuscarValorcambioCurso']=$idp;
          
            $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";


          }else{


            $sql="SELECT * FROM `datosalumnos`";
          }
           }   
           $cont=1;  

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
               $ver[9]."||".
               $ver[10]."||".
               $ver[11]."||".
               $ver[12]."||".
               $ver[13]."||".
               $ver[14];
          
        
          $cont=$cont+1;
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionformNotaAlumno('<?php echo $datos ?>')"><?php echo $ver[1] ?>
            
          </button></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[17] ?>--<?php echo $ver[8] ?></td>
        <td> 

         

          <button class="btn btn-secondary glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoCursoCargainformeNotaCalfTO" onclick="InformacionformNotaAlumnoInformeNotas('<?php echo $ver[0] ?>')">
          </button>

        </td>


      
      </tr>
      <?php 
    }


       ?>
    </table>

</b>
  </p></div>
</div>
</div>


