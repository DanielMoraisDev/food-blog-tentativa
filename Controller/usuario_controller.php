<?php

use Connection;
use UsuarioService;

require_once ROOT_PATH . '/Config/Connection.php';
require_once ROOT_PATH . '/Services/UsuarioService.php';

$connection = new Connection();

$usuarioService = new UsuarioService($connection);
if (isset($_SESSION['nickname'])) {
	$usuario->__set('id', $_SESSION['nickname']);
	$usuario = $usuarioService->getData();
	$_SESSION['id_user'] = $usuario[0]['id'];
}
