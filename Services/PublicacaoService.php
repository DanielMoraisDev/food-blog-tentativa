<?php

use Connection;
use Publicacao;

class PublicacaoService
{
	private $connection;
	private $publicacao;

	public function __construct(Connection $connection, ?Publicacao $publicacao = null)
	{
		$this->connection = $connection->connect();

		if ($this->connection === null) {
			die("Erro: A conexão com o banco não foi estabelecida.");
		}

		$this->publicacao = $publicacao;
	}

	public function getData()
	{
		$query = 'SELECT * FROM publicacoes';
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
