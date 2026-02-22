<?php

use Connection;
use Empresa;

class EmpresaService
{
	private $connection;
	private $empresa;

	public function __construct(Connection $connection, ?Empresa $empresa = null)
	{
		$this->connection = $connection->connect();

		if ($this->connection === null) {
			die("Erro: A conexão com o banco não foi estabelecida.");
		}

		$this->empresa = $empresa;
	}

	public function getData()
	{
		$query = 'SELECT * FROM empresas';
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
