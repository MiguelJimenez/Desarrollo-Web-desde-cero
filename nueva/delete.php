<?php 
$conexion = new mysqli('localhost', 'root', '', 'nueva') or die ('No se ha podido conectar...');
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);

echo "<h3>Elige un usuario para eliminar</h3>";


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
	
	echo "<tr><td align=center>
	<a href='delete1.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
	<td>$nombre</td><td><a href='email.php?email=$email'>$email</td><td>$password</td></tr>";

}
echo "</table>";

$conexion->close();

include ('links.php');

?>
