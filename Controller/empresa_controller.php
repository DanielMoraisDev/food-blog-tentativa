<?php

use Connection;
use EmpresaService;

require_once ROOT_PATH . '/Config/Connection.php';
require_once ROOT_PATH . '/Services/EmpresaService.php';

$connection = new Connection();

$empresaService = new EmpresaService($connection);
$empresa = $empresaService->getData();
