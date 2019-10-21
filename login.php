<?php
	require("conf.php");
	
	$username = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$query = "SELECT id_usuario,nombre,estatus,contrasena FROM usuarios WHERE nombre='$username'";

	$resource	= $db->query($query);
	$result		= $resource->fetchArray();

	if (isset($result['id_usuario'])) {
		if ( password_verify($contrasena, $result['contrasena'])) {
			session_start();
			$_SESSION = [
				'loggedin' => true,
				'username' => $result['nombre'],
				'id_username' => $result['id_usuario']
			];
			header('Location: main/index.php');
		} else if ($result['contrasena'] != $contrasena) {
			echo 'El Usuario/Contraseña no es correcto, <a href="/">intente de nuevo</a>';
		}
	}

