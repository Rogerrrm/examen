<?php

function ctrlDoLogout($request, $response, $container) {
    // Clear the user's session data
    $response->setSession("user", []);
    
    // Set the 'logged' session variable to false to indicate the user is no longer logged in
    $response->setSession("logged", false);
    
    // Redirect the user to the index (home) page after logout
    $response->redirect("location: index.php");

    return $response;
}
