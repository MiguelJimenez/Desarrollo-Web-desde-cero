<?php 
$conexion = new mysqli('localhost', 'root', '', 'nueva') or die ('No se ha podido conectar...');
$consulta = "SELECT * FROM usuarios WHERE id='".$_REQUEST['id']."'";
$resultado = mysqli_query($conexion, $consulta);

echo "<table width='90%' align='center' border=2>";

echo "<tr><td width='40%' align='center' bgcolor='FFFF00'>ID</td>    
<td width='40%' align='center' bgcolor='FFFF00'>NOMBRE</td> 
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td> 
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td></tr>";

while($fila = mysqli_fetch_assoc($resultado))
{

	$id = $fila['id'];
	$nombre = $fila['nombre'];
	$email = $fila['email'];
	$password = $fila['password'];
	
	echo "<tr><td align=center>$id</td>
	<td>$nombre</td><td>$email</td><td>$password</td></tr>";
}

echo "</table>";

$conexion->close();

include ('links.php');

?>

<form action="delete2.php" method="post">
	<p>Estas seguro de eliminar el usuario?</p>
	<input type="submit" name="submit" value="Si">
	<button href="delete.php">NO</button>
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
</form>

