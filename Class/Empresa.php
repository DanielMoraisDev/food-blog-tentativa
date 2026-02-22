<?php

class Empresa
{
	private string $id_empresa;
	private string $nome;
	private string $logo;

	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}
}
