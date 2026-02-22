<?php

use Connection;
use PublicacaoService;

require_once ROOT_PATH . '/Config/Connection.php';
require_once ROOT_PATH . '/Services/PublicacaoService.php';

$connection = new Connection();

$publicacaoService = new PublicacaoService($connection);
$publicacoes = $publicacaoService->getData();
