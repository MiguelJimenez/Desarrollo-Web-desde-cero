<?php 
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nuevonombre'];
$email = $_REQUEST['nuevoemail'];
$password = $_REQUEST['nuevapassword'];

$conexion = new mysqli('localhost', 'root', '', 'nueva') or die('No se ha podido realizar la conexión');

$consulta = "UPDATE usuarios SET nombre='$nombre', email='$email', password='$password' WHERE id='$id'";

$resultado = $conexion->query($consulta);

echo "Registro actualizado correctamente";

$conexion->close();

include('links.php');

?>