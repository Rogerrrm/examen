<?php

function ctrlUpdateDadesAdmin($request, $response, $container) {
    $taskModel = $container->apf();
    
    // Retrieve data from the POST form
    $id_apartment = $request->get(INPUT_POST, "id_apartment");
    $apartment_name = $request->get(INPUT_POST, "apartment_name");
    $high_season_price = $request->get(INPUT_POST, "high_season_price");
    $low_season_price = $request->get(INPUT_POST, "low_season_price");
    $num_roms = $request->get(INPUT_POST, "num_roms");
    $postal_address = $request->get(INPUT_POST, "postal_address");
    $square_meter = $request->get(INPUT_POST, "square_meter");
    $latitude = $request->get(INPUT_POST, "latitude");
    $longitude = $request->get(INPUT_POST, "longitude");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $id_user = $request->get(INPUT_POST, "id_user");
    $direction = $request->get(INPUT_POST, "direction");
    $id_services = $request->get(INPUT_POST, "id_services");
    $img_url = $request->get(INPUT_POST, "img_url");

    // Call the model to update the apartment information
    $taskModel->editApartment($id_apartment, $apartment_name, $high_season_price, $low_season_price, $num_roms, $postal_address, $square_meter, $latitude, $longitude, $descripcion, $id_user, $direction, $id_services, $img_url);

    // Set the template for the response
    $response->setTemplate("admincontroller.php");
    
    return $response;
}

