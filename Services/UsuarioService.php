<?php

use Connection;
use Usuario;

class UsuarioService
{
	private $connection;
	private $usuario;

	public function __construct(Connection $connection, Usuario $usuario)
	{
		$this->connection = $connection->connect();

		if ($this->connection === null) {
			die("Erro: A conexão com o banco não foi estabelecida.");
		}

		$this->usuario = $usuario;
	}

	public function getData()
	{
		$query = 'SELECT u.nickname, u.nome, u.id_usuario, u.foto FROM usuarios AS u WHERE nickname = :id_usuario GROUP BY u.id_usuario';
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue('id_usuario', $this->usuario->__get('id_usuario'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getAll()
	{
		$query = 'SELECT id, nickname FROM usuarios';
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
