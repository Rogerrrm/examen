<?php

function ctrlRegister($request, $response, $container){

    // Set the response template to "register.php"
    $response->setTemplate("register.php");

    return $response;    
}
