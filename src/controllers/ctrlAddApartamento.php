<?php

// Define a function named ctrlAddApartamento that handles a specific action or route in the application.
function ctrlAddApartamento($request, $response, $container){

    // Obtain an instance of the taskModel from the provided container. 
    $taskModel = $container->users();

    // Retrieve user information from the session data. It is assumed that the "user" object is stored in the session.
    $user = $request->get("SESSION", "user");

    // Retrieve a list of apartments using the taskModel's getAll() method and store it in the "apart" variable.
    $apart = $taskModel->getAll();

    // Set the "apart" data in the response object, which can be used to pass data to the view.
    $response->set("apart", $apart);

    // Set the template for the response to "addApartamento.php," indicating the view that should be rendered.
    $response->setTemplate("addApartamento.php");

    // Return the response.
    return $response;    
}
