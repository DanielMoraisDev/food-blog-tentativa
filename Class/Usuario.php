<?php

class Usuario
{
	private string $id_usuario;
	private string $nome;
	private string $email;
	private string $nickname;
	private string $senha;

	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}
}
