<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form method="post" action="">
		Nombre: <input type="text" name="nombre"><br>
		Email: <input type="text" name="email"><br>
		Teléfono: <input type="text" name="telef"><br>
		Password: <input type="password" name="password"><br>
		Confirmar Password: <input type="password" name="cpassword"><br>
		<input type="submit" name="submit" value="Enviar">
		<br>
	</form>

<?php 
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include('proceso.php');
?>

</body>
</html>

