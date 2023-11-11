<?php

function ctrlFormReserve($request, $response, $container) {
    $taskModel = $container->users();
    $taskModels = $container->apf();

    // Get user information from the session
    $user = $request->get("SESSION", "user");

    // Fetch all the reservations associated with the user
    $apfs = $taskModel->getAll($user["id_user"]);

    // Fetch information about available apartments
    $app = $taskModels->getapartamento();

    // Set data for the response
    $response->set("apfs", $apfs);
    $response->set("app", $app);

    // Set the template for rendering
    $response->setTemplate("formreserve.php");
    
    // Render the reservation form template

    // Include the template (assuming "form_reserve.php" is a view file)
    include "../src/views/form_reserve.php";

    return $response;
}
