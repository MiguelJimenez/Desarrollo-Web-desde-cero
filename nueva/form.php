<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<h2>Registro</h2>
	<form action="insert.php" method="post">
		<table border="0" width="60%">
		<tr>
			<td width="10%">
				Nombre:
			</td>
			<td>
				 <input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td width="10%">
				Email:
			</td>
			<td>
				 <input type="text" name="email">			
			</td>
		</tr>
		<tr>
			<td width="10%">
				Password:		
			</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
		
		
		</table>
		<input type="submit" name="submit" value="Enviar">
	</form>
	
	<br>
	<?php include('links.php'); ?>
</body>
</html>