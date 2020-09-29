<?php 
  session_start();



  if (isset($_SESSION['dniLoginT']) && $_SESSION['usuarioA']=='alumno') 
  {

    $dniLoginT=$_SESSION['dniLoginT'];
    $usuarioA=$_SESSION['usuarioA'];

    $_SESSION['dniLoginT']=$dniLoginT;
    $_SESSION['usuarioA']=$usuarioA;


 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Alumno</title>
 <link rel="stylesheet" type="text/css" href="../libreriasConexion/esty.css">


    <link rel="stylesheet" type="text/css" href="../libreriasConexion/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/select2/css/select2.css">

  <script src="../libreriasConexion/librerias/jquery-3.2.1.min.js"></script>
<script src="../libreriasConexion/librerias/alertifyjs/alertify.js"></script>
  <script src="../libreriasConexion/librerias/select2/js/select2.js"></script>

<script src="js/functionEfectos.js"></script>
<script src="js/functionDatosAlumnos.js"></script>

</head>
<body class='borde4' >


      <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
        <a href="#" class="navbar-brand"><!--<img src="logo.jpg" style="width: 20px;"> --><?php echo "BIENVENIDO ESTUDIANTE<br>D.N.I. :".$dniLoginT; ?></a>
        

        <button class="navbar-toggler" title="button" data-toggle="collapse" data-target="#uno">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="uno">
        <ul class="navbar-nav">
    
          


          <li class="nav-item"><a href="javascript: void(0)"  class="nav-link" onclick='cerrar();'>CERRAR SESIÓN</a></li>


        </ul>
      </div>
      </nav>




<br><br><br><br>


 <main role="main" class="container">
      <h1 class="mt-5"><CENTER><STRONG><p style="color:#FDFEFE; background:#1B2631";>AUTOGESTIÓN</p></STRONG></CENTER></h1>

      <dir id="menuPrincipalAlumno"><br><br>
      <button type="button" class="btn btn-success btn-block" onclick='datosAlumnoMenu();'>DATOS <span class="badge badge-light"> ALUMNO </span></button>
      <button type="button" class="btn btn-success btn-block" onclick='libretaCalificacionMenu();' >VISUALIZACIÓN <span class="badge badge-light"> LIBRETA CALIFICACIONES DIGITAL </span></button>
      <button type="button" class="btn btn-success btn-block" onclick='analiticoMenu();' >ANALÍTICO <span class="badge badge-light"> DIGITAL </span></button>
      <button type="button" class="btn btn-success btn-block" onclick='constanciaAlumnoRegulaMenu();' >PEDIDO <span class="badge badge-light"> CONSTANCIA ALUMNO REGULAR </span></button>
      

       </dir>

       <dir id="datosAlumnoMenu">
                <button type="button" class="btn btn-success btn-block" onclick='regresarmenuPrincipalAlumno();'>Regresar <span class="badge badge-light"> (Atrás) </span></button><br>
            

            <dir id="datosAlumnoTABLA"></dir>
            <dir id="datosAlumnoEXTRAS"></dir>      

       </dir>

       <dir id="libretaCalificacionMenu">
                <button type="button" class="btn btn-success btn-block" onclick='regresarmenuPrincipalAlumno();'>Regresar <span class="badge badge-light"> (Atrás) </span></button><br>
          
            <dir id="libretaCalificacionTABLA"></dir>
          
                

       </dir>

       <dir id="analiticoMenu">
                <button type="button" class="btn btn-success btn-block" onclick='regresarmenuPrincipalAlumno();'>Regresar <span class="badge badge-light"> (Atrás) </span></button><br>
        
            <dir id="analiticoBUSCAR"></dir> 
            <dir id="analiticoTABLA"></dir>
            <dir id="analiticoEXTRAS"></dir>  

       </dir>

       <dir id="constanciaAlumnoRegulaMenu">
                <button type="button" class="btn btn-success btn-block" onclick='regresarmenuPrincipalAlumno();'>Regresar <span class="badge badge-light"> (Atrás) </span></button><br>
        
            <dir id="constanciaAlumnoRegulaBUSCAR"></dir> 
            <dir id="constanciaAlumnoRegulaTABLA"></dir>
            <dir id="constanciaAlumnoRegulaEXTRAS"></dir>  

       </dir>
</main>

<footer class="footer"><br><br><br><br>
      <div class="container">
        <span class="text-muted"><h5><CENTER><STRONG><p style="color:#FDFEFE; background:#1B2631";>BY G.K.M.A.</p></CENTER></STRONG></h5></span>
      </div>
    </footer>

</body>
</html>


<script>

 $(document).ready(function(){

  $("#menuPrincipalAlumno").show();
  $("#datosAlumnoMenu").hide();
  $("#libretaCalificacionMenu").hide();
  $("#analiticoMenu").hide();
  $("#constanciaAlumnoRegulaMenu").hide();

  });

 $('#libretaCalificacionTABLA').load('libretasCalificacion/libretaDigital.php');

$('#datosAlumnoTABLA').load('datosAlumnos/datosAlumnos.php');
$('#datosAlumnoEXTRAS').load('datosAlumnos/datosAlumnosExtras.php');




        function cerrar()
        {
            $.ajax({
                url:'../libreriasConexion/cerrar.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "../login/index.php";
            });
        }

        

    


        


    </script>

<script src="../libreriasConexion/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../libreriasConexion/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../libreriasConexion/bootstrap/js/bootstrap.min.js"></script>
<script src="../libreriasConexion/bootstrap/js/bootstrap.js"></script>

<?php

  }
  else
  {
    header("location: ../login/index.php");
  }

