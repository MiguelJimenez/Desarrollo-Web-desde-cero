<?php 
$conexion = mysqli_connect('localhost', 'root', '', 'nueva') or die ('No se ha podido conectar...');
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);


echo "<table width='90%' align='center' border=2>";

echo "<tr><td width='40%' align='center' bgcolor='FFFF00'>ID</td>    
<td width='40%' align='center' bgcolor='FFFF00'>NOMBRE</td> 
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td> 
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td></tr>";


while($fila = mysqli_fetch_assoc($resultado)){

	$id = $fila['id'];
	$nombre = $fila['nombre'];
	$email = $fila['email'];
	$password = $fila['password'];
	
	
	
	
	echo "<tr><td align=center>
	<a href='edit.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
	<td>$nombre</td><td><a href='email.php?email=$email'>$email</td><td>$password</td></tr>";


}
echo "</table>";

include ('links.php');

?>
<!-- <table>
	<tr>
		<td></td>
		<td>Id</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Pass</td>
	</tr>
	<?php while($fila = mysqli_fetch_array($resultado)): ?>
	<?php 
		$id = $fila['id'];
		$nombre = $fila['nombre'];
		$email = $fila['email'];
		$password = $fila['password'];
	?>
	<tr>
		<td><a href="edit.php?id=$id&nombre=$nombre&email=$email&password=$password">Editar</a></td>	
		<td><?php echo $id; ?></td>
		<td><?php echo $nombre; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $password; ?></td>
	</tr>
<?php endwhile; ?>

</table> -->


<?php 
$conexion = mysqli_connect('localhost', 'root', '', 'nueva') or die ('No se ha podido conectar...');
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);


echo "<table width='90%' align='center' border=2>";

echo "<tr><td width='40%' align='center' bgcolor='FFFF00'>ID</td>    
<td width='40%' align='center' bgcolor='FFFF00'>NOMBRE</td> 
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td> 
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td></tr>";


while($fila = mysqli_fetch_assoc($resultado)){

	$id = $fila['id'];
	$nombre = $fila['nombre'];
	$email = $fila['email'];
	$password = $fila['password'];
	
	
	
	
	echo "<tr><td align=center>
	<a href='edit.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
	<td>$nombre</td><td><a href='email.php?email=$email'>$email</td><td>$password</td></tr>";


}
echo "</table>";

include ('links.php');

?>
<!-- <table>
	<tr>
		<td></td>
		<td>Id</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Pass</td>
	</tr>
	<?php while($fila = mysqli_fetch_array($resultado)): ?>
	<?php 
		$id = $fila['id'];
		$nombre = $fila['nombre'];
		$email = $fila['email'];
		$password = $fila['password'];
	?>
	<tr>
		<td><a href="edit.php?id=$id&nombre=$nombre&email=$email&password=$password">Editar</a></td>	
		<td><?php echo $id; ?></td>
		<td><?php echo $nombre; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $password; ?></td>
	</tr>
<?php endwhile; ?>

</table> -->


