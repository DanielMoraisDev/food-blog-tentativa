<?php

class Publicacao
{
	private string $id_publicacao;
	private string $foto;
	private string $titulo_prato;
	private string $local;
	private string $cidade;
	private string $empresa_id;

	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}
}
