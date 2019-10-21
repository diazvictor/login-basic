<?php
	require("conf.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$register_username = $_POST['register_username'];
		$register_password = $_POST['register_password'];
		
		$query = "INSERT INTO usuarios(nombre,contrasena) VALUES('".$register_username."','".password_hash($register_password,PASSWORD_DEFAULT)."')";
		
		if (!$db->exec($query)) {
			echo '<script type="text/javascript">alert("No se han podido enviar los datos")</script>';
		} else {
			echo '<script type="text/javascript">alert("Datos enviados correctamente")</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Bienvenid@s a mi pagina web</title>
</head>
<body>
	<form method="POST">
		<label for="register_username">Nombre de usuario:</label><br>
		<input type="text" id="register_username" name="register_username" autocomplete="off"><br>

		<label for="register_password">Contraseña:</label><br>
		<input type="password" id="register_password" name="register_password"><br>

		<button type="submit" value="registrar">Registrar</button>
	</form>
</body>
</html>
