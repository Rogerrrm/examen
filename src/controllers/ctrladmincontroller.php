<?php

// Define a function named ctrladmincontroller that handles a specific action or route in the application.
function ctrladmincontroller($request, $response, $container){
    // Obtain instances of the taskModel and taskModel2 from the provided container. 
    $taskModel = $container->Users();
    $taskModel2 = $container->apf();

    // Fetch all data related to users (possibly administrative users) and store it in the "apfs" variable.
    $apfs = $taskModel->getAll();

    // Fetch reservation data (e.g., reservations for apartments) and store it in the "reserve" variable.
    $reserve = $taskModel2->getReserve();

    // Fetch apartment data and store it in the "apart" variable.
    $apart = $taskModel2->getapartamento();

    // Set the "apfs," "reserve," and "apart" data in the response object to pass this data to the view.
    $response->set("apfs", $apfs);
    $response->set("apart", $apart);
    $response->set("reserve", $reserve);

    // Set the template for the response to "admincontroller.php," indicating the view that should be rendered.
    $response->setTemplate("admincontroller.php");

    // Return the response.
    return $response;
}
