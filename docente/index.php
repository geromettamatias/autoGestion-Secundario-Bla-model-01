<?php 
  session_start();



  if (isset($_SESSION['dniLoginT']) && $_SESSION['usuarioA']=='docente') 
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
	<title>Docente</title>
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



</head>
<body class='borde4' >



      <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
        <a href="#" class="navbar-brand"><!--<img src="logo.jpg" style="width: 20px;"> --><?php echo "BIENVENIDO PROFESOR<br>D.N.I. :".$dniLoginT; ?></a>
        

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


<div class="container1">
  <div class="row">
    <div class="col-12">
      

















    </div>
  </div>
</div>


</body>
</html>


<script>


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

