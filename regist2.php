<html>
<head>
<title>Registro de noteros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<center>
<body>
<?php
$usuario=$_REQUEST ['usuario'];
$clave=$_REQUEST ['clave'];
include("conexion.php");

$registros=mysqli_query($conexion,"select nombre from usuarios
                        where nombre='$usuario'");
  if($row=mysqli_fetch_assoc($registros)){
   //Guardo los datos de la BD en las variables de php
    echo "<script type='text/javascript'>
     alert('Este usuario ya existe, elija otro por favor ;)');
     location.href='regist.php';
     </script>";
 
   }
   else
   {


mysqli_query($conexion,"insert into usuarios values ('','$usuario','$clave','0')");
//mysqli_query($conexion,"insert into nota values ('$notero','$titulo')");
mysqli_close($conexion);
//Redireccionamos a la pagina: index.php
  echo "<script type='text/javascript'>
   alert('Registrado con exito');
     location.href='index.php';
     </script>";
die();
}
?>
</body>
</html>

