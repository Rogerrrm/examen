<?php

function ctrlDades($request, $response, $container) {
    
    $taskModel = $container->users();

    $codigoRegistro = $taskModel->dades();

    $response->set("codigoRegistro", $codigoRegistro);
    $response->setTemplate("dades.php");

    return $response;
}