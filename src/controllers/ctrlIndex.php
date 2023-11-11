<?php

function ctrlIndex($request, $response, $container){

    $taskModel = $container->examen();

    // Get user information from the session
    $user = $request->get("SESSION", "user");

    // Fetch reservations associated with the user
    $apfs = $taskModel->getAll($user["id_user"]);

    // Fetch information about available apartments

    // Set data for the response
    $response->set("apfs", $apfs);

    // Set the template for rendering
    $response->setTemplate("index.php");

    return $response;
}
