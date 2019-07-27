<html>
<head>
<title>BASQUET</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer.css">
<meta name="viewport" content="width=device-width, initial-escale=1.0">
</head>
<body background="img/fondoprincipal2.jpg" style="color:black;font-size:18px">
<form method="post" id="flogin" action="regist2.php">
<center>
<font style="font-size:30px">
<img src="img/basket.png" width="180px">
<br>
<div style="font-size:20px color: white">
<div class="titulo">
Registrarse
</div>
</font>

<div class="jumbotron boxlogin">
<div class="container">
<label>Nombre de usuario: </label>
<input type="text" name="usuario" class="form-control" required>
<br>
<label>Contraseña: </label>
<input type="password" name="clave" class="form-control" required>
<br>
<input type="submit" class="btn btn-danger" value="Registrarse">
</div>
</form>
</div>
<?php 
	echo "<a href='index.php' style='position:absolute;left:0px;top:0px;text-decoration:none;font-family:arial' type='button' class='btn btn-default'><<<</a>";
	?>
</body>
</html>