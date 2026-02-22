<?php

require_once __DIR__ . '/Config/Connection.php';

$connection = new Connection();
$connection = $connection->connect();

session_start();
// print_r($_POST);
$user_pass = $_POST;

$query = 'SELECT nickname, senha FROM usuarios';
$stmt = $connection->prepare($query);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['login_error'] = '';

$loginValido = false;

foreach ($res as $user) {
	if ($user['nickname'] == $user_pass['nickname'] && $user['senha'] == $user_pass['senha']) {
		$_SESSION['nickname'] = $_POST['nickname'];
		$loginValido = true;
		break;
	}
}

if ($loginValido) {
	unset($_SESSION['login_error']);
	header('Location: index.php');
	exit;
} else {
	$_SESSION['login_error'] = 'Usuário ou senha inválidos';
	header('Location: index.php');
	exit;
}
