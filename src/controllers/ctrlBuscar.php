<?php

// Define a function named ctrlBuscar that handles a specific action or route in the application.
function ctrlBuscar($request, $response, $container) {
    // Set the template for the response to "buscarapartamento.php," indicating the view that should be rendered.
    $response->setTemplate("buscarapartamento.php");

    // Return the response.
    return $response;
}