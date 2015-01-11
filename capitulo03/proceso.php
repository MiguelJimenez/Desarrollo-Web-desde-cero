<?php 
if($_POST['nombre'])
{
	if($_POST['email'])
	{
		if($_POST['telef'])
		{
			if ($_POST['password'])
			{
				if($_POST['cpassword'])
				{
					if($_POST['password'] == $_POST['cpassword'])
					{
						echo "todo está bien";
					}
					else
					{
						echo "Las password no coinciden";
					}
				}
				else
				{
					echo "Por favor, confirma la password";
				}
			}
			else
			{
				echo "Por favor, escribe el password";
			}
		}
		else
		{
			echo "Por favor, escribe el teléfono";
		}
	}
	else
	{
		echo "Por favor, escribe el email";
	}
}
else
{
	echo "Por favor, escribe el nombre";
}


?>