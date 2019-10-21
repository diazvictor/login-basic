<?php
	require("conf.php");
	session_start();
	if (user_is_valid() == true) {
		header('Location: main/index.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Credenciales</title>
</head>
<body>
	<form method="POST" action="login.php">
		<label for="usuario">Usuario:</label><br>
		<input type="text" id="usuario" name="usuario" autocomplete="off"><br>

		<label for="contrasena">Contraseña:</label><br>
		<input type="password" id="contrasena" name="contrasena"><br>

		<button type="submit">Entrar</button><br>
		<a href="/registrar.php">Registrarte</a>
	</form>
</body>
</html>
