<?php
//creamos la sesión
session_start();
//validamos si se ha hecho o no el inicio de sesión correctamente
//si no se ha hecho la sesión nos regresará a index.php
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
$usuario=$_SESSION['nombre'];
$idadmin=$_REQUEST['idadmin'];



echo "<div style='position:absolute;top:5;left:0; color:lightblue'><h4>Hola $usuario!</h4></div>";
 echo "<a href='cerrarsesion.php' style='float:right;' class='btn btn-info btn-sm'>
          <span class='glyphicon glyphicon-off'></span> Cerrar Sesión 
   </a>"

?>
<html>
<head>
<title>Contador</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilotabla.css">
<link rel="stylesheet" href="css/footer.css">
</head> 
<body>
  <center>
  <?php 
  if ($idadmin=="1")
{
  include ('conexion.php');

  $registros=mysqli_query($conexion,"select * from contador") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{$local= $reg['local'];
$visitante=  $reg['visitante'];
}
?>

  <div class="container">
  <br>
  <br>
  <br>
<div class="row">
<div class="col-md-6">
<label style="color:yellow;font-size:60px;font-family: sans-serif;">Local:</label>
<br>

<?php 
echo "<label style='font-size:200px;color:white'>",$local,"</label>";
?>
</div>



 

<label style="color:yellow;font-size:60px;font-family: sans-serif;">Visitante:</label>
<br>
<?php 
echo "<label style='font-size:200px;color:white'>",$visitante,"</label>";
?>

</div>
</div>
 <?php
}

else
if ($idadmin=="0")
{
include ('conexion.php');

  $registros=mysqli_query($conexion,"select * from contador") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{$local= $reg['local'];
$visitante=  $reg['visitante'];
}
?>

<div class="container">

  <br>
  <br>
  <br>
   
<div class="row">
<div class="col-md-6">
<label style="color:yellow;font-size:60px;font-family: sans-serif;">Local:</label>
<br>

<?php 
echo "<label style='font-size:200px;color:white'>",$local,"</label>";
?>
</div>



 

<label style="color:yellow;font-size:60px;font-family: sans-serif;">Visitante:</label>
<br>
<?php 
echo "<label style='font-size:200px;color:white'>",$visitante,"</label>";
?>

</div>
</div>
 <?php
}
?>
</body>
</html>
