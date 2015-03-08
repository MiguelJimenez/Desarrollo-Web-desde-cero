<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
</head>
<body>
	<h3>Editar usuario <?php echo $_REQUEST['nombre']; ?>:</h3>
	<form action="actualiza.php" method="POST">
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nuevonombre" value="<?php echo $_REQUEST['nombre']; ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="nuevoemail" value="<?php echo $_REQUEST['email']; ?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="nuevapassword" value="<?php echo $_REQUEST['password']; ?>"></td>
			</tr>
		</table>
		<input type="submit" name ="submit" value="Actualizar">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
	</form>
</body>
</html>