<?php

function ctrlRegisterGestor($request, $response, $container){

    // Set the response template to "registerGestor.php"
    $response->setTemplate("registerGestor.php");

    return $response;    
}
