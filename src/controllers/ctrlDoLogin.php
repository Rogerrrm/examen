<?php

function ctrlDoLogin($request, $response, $container) {
    // Get user-provided username and password from the request
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");

    // Access the user model from the container
    $userModel = $container->users();

    // Attempt to log in the user by verifying the username and password
    $userModel = $userModel->login($user, $pass);

    if ($userModel) {
        // If login is successful, set the user's session and logged status
        $response->setSession("user", $userModel);
        $response->setSession("logged", true);

        // Redirect to a specific page (e.g., user's profile)
        $response->redirect("location: index.php?r=dades");
    } else {
        // If login fails, redirect back to the login page
        $response->redirect("location: index.php?r=login");
    }

    return $response;
}
