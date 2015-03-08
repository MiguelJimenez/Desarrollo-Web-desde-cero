<?php 
mysql_connect('localhost', 'root', '') or die('No se ha podido conectar!');
mysql_select_db('nueva');

$resultado = mysql_query("SELECT * FROM usuarios");
while($row = mysql_fetch_array($resultado))
{
	echo $row['nombre']." ".$row['email']." ".$row['password'];
	echo  "<br>";
}
include('links.php');
mysql_close();


?>