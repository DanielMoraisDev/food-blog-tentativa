<?php

use Connection;
use UsuarioService;

require_once ROOT_PATH . '/Config/Connection.php';
require_once ROOT_PATH . '/Services/UsuarioService.php';
require_once ROOT_PATH . '/Class/Usuario.php';

$connection = new Connection();

$usuario = new Usuario();

$usuarioService = new UsuarioService($connection, $usuario);
if (isset($_SESSION['nickname'])) {
	$usuario->__set('id_usuario', $_SESSION['nickname']);
	$usuario = $usuarioService->getData();
	$_SESSION['id_user'] = $usuario[0]['id'];
}
