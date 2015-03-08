<?php 
$conexion = new mysqli('localhost', 'root', '', 'usuarios');

$consulta = "DELETE FROM usuarios WHERE id='".$_REQUEST['id']."'";

$resultado = mysqli_query($conexion, $consulta);


echo "El usuario ha sido eliminado";

$conexion->close();

include('links.php');
?>