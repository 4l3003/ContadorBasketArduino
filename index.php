<html>
<head>
<title>BASQUET</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<meta name="viewport" content="width=device-width, initial-escale=1.0">
<script language="JavaScript">
<!--
  javascript:window.history.forward(1);
//-->
</script> 
</head>
<body >
<form method="post" id="flogin" action="usuario.php">
<center>
<font style="font-size:30px">
<img src="img/logo.png" class="img-responsive" width="130px">



<h2>Contador profesional de basketball</h2>

</font>
<?php
include('conexion.php');
$resultado_consulta_mysql=mysqli_query($conexion,'select nombre from usuarios');
?>
<div class="jumbotron boxlogin">
<div class="container">
<label>Nombre de usuario: </label>
<input type="text" name="usuario" class="form-control" required>
<br>
<label>Clave: </label>
<input type="password" name="clave" class="form-control" required>
<br>
<input type="submit" class="btn btn-success" value="Iniciar sesion">
</div>
</form>
</div>
<p style="color:white;font-size:20px">¿Aun no te has registrado? ¿Que esperas?</p>
<?php 
   echo "<form method='post' action='regist.php'>
<input type='submit' class='btn btn-danger active' value='Registrarse'>";
?>
</body>
</html>