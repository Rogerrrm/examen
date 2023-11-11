<?php

function ctrlBuscarApartamento($request, $response, $container) {
    // Get the task model from the container
    $taskModel = $container->apf();

    // Get user input: Check-in date, check-out date, and the number of rooms
    $fecha_entrada = $request->get(INPUT_POST, "fecha_entrada");
    $fecha_salida = $request->get(INPUT_POST, "fecha_salida");
    $num_roms = $request->get(INPUT_POST, "num_roms");

    // Use the task model to search for available apartments
    $apartamentosEncontrados = $taskModel->buscarApartamento($fecha_entrada, $fecha_salida, $num_roms);

    // Set the search results in the response object
    $response->set("apartamentosEncontrados", $apartamentosEncontrados);

    // Set the template to display the search results
    $response->setTemplate("buscarapartamento.php");

    return $response;
}

