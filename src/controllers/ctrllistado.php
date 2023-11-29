<?php

function ctrllistado($request, $response, $container) {
    
    $taskModel = $container->users();

    $codigoRegistro = $taskModel->listado();

    $response->set("codigoRegistro", $codigoRegistro);
    $response->setTemplate("listado.php");

    return $response;
}