<?php 

class login{

	function validar(){
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		if (($usuario=='admin')&&($clave=='admin')) {
			$vista = 'inicio';
		}elseif (($usuario=='usuario')&&($clave=='clave')) {
			$vista = 'inicio_lider';
		}elseif (($usuario!='admin')||($usuario!='usuario')) {
			$vista = 'login';
		}elseif (($clave!='admin')||($clave!='clave')) {
			$vista = 'login';
		}

		return $vista;
	}
}
 
 ?>