<?php

function ctrlDeleteReserve($request, $response, $container){
    // Retrieve the container instance for the apf model
    $apf = $container->apf();
    
    // Get the 'id' parameter from the GET request
    $res_id = $request->get(INPUT_GET, "id");    
    // Get the user information from the session
    $user = $request->get("SESSION", "user");

    // Call the 'deleteReserve' method of the apf model to delete the reservation with the specified 'res_id'
    $apf->deleteReserve($res_id);

    // Redirect the response to the 'index.php?r=reserve' location
    $response->redirect("location: index.php?r=reserve");

    return $response;
}
