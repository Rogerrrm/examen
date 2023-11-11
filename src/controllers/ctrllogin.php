<?php

function ctrlLogin($request, $response, $container){

    // Set the template to render the login form
    $response->setTemplate("login.php");

    return $response;    
}
