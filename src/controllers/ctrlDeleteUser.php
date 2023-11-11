<?php

function ctrlDeleteUser($request, $response, $container){
    // Retrieve the container instance for the apf model
    $apf = $container->apf();
    
    // Get the 'id' parameter from the GET request
    $usr_id = $request->get(INPUT_GET, "id");    
    // Get the user information from the session
    $user = $request->get("SESSION", "user");

    // Call the 'deleteUser' method of the apf model to delete the user with the specified 'usr_id'
    $apf->deleteUser($usr_id);

    // Redirect the response to the 'index.php?r=admincontroller' location
    $response->redirect("location: index.php?r=admincontroller");

    return $response;
}
