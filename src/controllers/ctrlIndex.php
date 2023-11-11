<?php

function ctrlIndex($request, $response, $container){

    $taskModel = $container->apf();

    // Get user information from the session
    $user = $request->get("SESSION", "user");

    // Fetch reservations associated with the user
    $apfs = $taskModel->getAll($user["id_user"]);

    // Fetch information about available apartments
    $apart = $taskModel->getapartamento();

    // Set data for the response
    $response->set("apfs", $apfs);
    $response->set("apart", $apart);

    // Set the template for rendering
    $response->setTemplate("index.php");

    return $response;
}
