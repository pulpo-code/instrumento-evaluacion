<?php
$conexion=mysqli_connect("localhost", "root", "","pulpo") or die("Problemas con la conexión");
mysqli_query($conexion,"insert into login(correo)values('$_REQUEST[correo]')")
or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="5;URL=../vista/home.html"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro" rel="stylesheet">
	<link rel="shorcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="../css/logeado.css">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Confirmación</title>
</head>
<body>
	<div class="logo">
		<a href="index.php"><img src="../img/logo_upsjb.png" alt="logo upsjb" height="80px"></a>
	</div>
	<div class="contenedor">
		<p class="mensaje">Haz ingresado correctamente</p>
	</div>
</body>
</html>