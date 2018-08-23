<?php
	$htaccess = $_SERVER{"REQUEST_URI"};
		include('../Modelo/vista.php');
		include('../Modelo/login.php');
	if (strpos($htaccess, "login") == true) {
		$indice = 'default';
	}elseif (strpos($htaccess, "inicio") == true) {
		$indice = 'inicio';
	}elseif (strpos($htaccess, "general_usuario_lider") == true) {
		$indice = 'general_usuario_lider';
	}elseif (strpos($htaccess, "nuevo_usuario") == true) {
		$indice = 'nuevo_usuario';
	}elseif (strpos($htaccess, "perfil_admin") == true) {
		$indice = 'perfil_admin';
	}elseif (strpos($htaccess, "perfil") == true) {
		$indice = 'perfil';
	}elseif (strpos($htaccess, "menu_lider") == true) {
		$indice = 'menu_lider';
	}elseif (strpos($htaccess, "menu_admin") == true) {
		$indice = 'menu_admin';
	}elseif (strpos($htaccess, "agregar_referido") == true) {
		$indice = 'agregar_referido';
	}elseif (strpos($htaccess, "Referidos") == true) {
		$indice = 'Referidos';
	}elseif (strpos($htaccess, "pedidos") == true) {
		echo("HI");
		$indice = 'pedidos';
	}elseif (strpos($htaccess, "bonos_ganancias") == true) {
		$indice = 'bonos_ganancias';
	}

	$vista = new vista;
	$login = new login;

	switch ($indice) {
		
		case 'inicio':
			$html = $login->validar();
			echo $vista->html($html);
		break;

		case 'general_usuario_lider':
			echo $vista->html('general_usuario_lider');
		break;

		case 'nuevo_usuario':
			echo $vista->html('nuevo_usuario');
		break;

		case 'perfil_admin':
			echo $vista->html('perfil_admin');
		break;

		case 'perfil':
			echo $vista->html('referidos_perfil');
		break; 

		case 'menu_lider':
			echo $vista->html('inicio_lider');
		break;

		case 'menu_admin':
			echo $vista->html('inicio');
		break;

		case 'agregar_referido':
			echo $vista->html('agregar_referido');
		break;

		case 'Referidos':
			echo $vista->html('Referidos');
		break;

		case 'pedidos':
			echo $vista->html('pedidos');
		break;

		case 'bonos_ganancias':
			echo $vista->html('bonos_ganancias');
		break;
		
		default:
			echo $vista->html('login');
		break;
	}


?>