CREATE TABLE IF NOT EXISTS publicacoes (
  	id_publicacao INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	foto text NOT NULL,
	titulo_prato text NOT NULL,
	local text NOT NULL,
	cidade text NOT NULL,
	empresa_id INT NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

	CONSTRAINT publicacao_ibfk_1 FOREIGN KEY (empresa_id) REFERENCES empresas (id_empresa)
);