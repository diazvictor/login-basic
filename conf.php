<?php
	ini_set('display_errors', 'Off');
	ini_set('display_startup_errors', 'Off');
	error_reporting(0);

	$dirname = '/home/victor/Proyectos/Php/blog/';
	$db = new SQLite3($dirname . 'db.db');

	if (file_exists($dirname . "db.db") == true) {
		$db = new SQLite3($dirname . 'db.db');
	} else {
		echo "Error al contactar con la base de datos :<i>(</i>";
	}

	function user_is_valid() {
		session_start();
		if( $_SESSION['loggedin'] ){
			return true;
		}
		return false;
	}
