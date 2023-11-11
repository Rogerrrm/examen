<?php

function ctrlDoLogin($request, $response, $container) {
   

    // Recibir datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Validar la identificación (aquí debes implementar tu lógica de validación)
    if ($usuario == 'usuario_demo' && $clave == 'clave_demo') {
        echo "¡Identificación exitosa!";
    } else {
        echo "Identificación fallida. Por favor, verifique sus credenciales.";
    }



    return $response;
}
