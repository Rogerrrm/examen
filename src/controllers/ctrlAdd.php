<?php

// Define a function named ctrlAdd that handles a specific action or route in the application.
function ctrlAdd($request, $response, $container){

    // Obtain an instance of the apfModel from the provided container. 
    // This suggests that the code is part of a larger application where apfModel manages data related to "apfs."
    $apfModel = $container->apf();

    // Retrieve a value from the POST request with the key "apf" and store it in the variable $apf.
    $apf = $request->get(INPUT_POST, "apf");    

    // Obtain user information from the session data, assuming that "user" is stored in the session.
    $user = $request->get("SESSION", "user");

    // Use the apfModel to add the value of $apf to the model, associating it with the user's ID obtained from the session data.
    $apfModel->add($apf, $user["id_user"]);

    // Redirect the response to "index.php," typically returning the user to the application's main page.
    $response->redirect("location: index.php");

    // Return the response.
    return $response;
}
