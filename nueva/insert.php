<?php 
include('links.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name && $email && $password)
{
	mysql_connect('localhost', 'root', '') or die('No se ha podido conectar!');
	mysql_select_db('nueva');
	mysql_query("INSERT INTO usuarios (nombre, email, password) VALUES ('$name', '$email', '$password')");

	$registro = mysql_affected_rows();
	echo $registro." linea ha sido insertada";
}
else
{
	echo 'Por favor, completa todos los campos del formulario';
}

mysql_close();




 ?>