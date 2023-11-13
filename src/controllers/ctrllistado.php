<?php

function ctrllistado($request, $response, $container){

    // Set the template to render the login form
    $response->setTemplate("listado.php");

    return $response;    
}
