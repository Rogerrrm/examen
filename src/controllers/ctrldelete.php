<?php

function ctrlDelete($request, $response, $container){
    // Retrieve the container instance for the apf model
    $apf = $container->apf();

    // Get the 'id' parameter from the GET request
    $id = $request->get(INPUT_GET, "id");    
    // Get the user information from the session
    $user = $request->get("SESSION", "user");

    // Call the 'delete' method of the apf model to delete the item with the specified 'id'
    $apf->delete($id);

    // Redirect the response to the 'index.php' location
    $response->redirect("location: index.php");

    return $response;
}
