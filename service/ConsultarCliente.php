<?php

require_once '../dao/ClienteDao.php';

// Parámetros
$dni = $_REQUEST["dni"];

// Proceso
$dao = new ClienteDao();
$lista = $dao->consultarCliene($dni);

$data = "";
if ($lista) {
    $data = json_encode($lista);
}

$data = trim($data);

// Retorno
echo $data;

?>