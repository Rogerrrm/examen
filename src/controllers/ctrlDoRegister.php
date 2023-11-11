<?php

function ctrlDoRegister($request, $response, $container) {
    $taskModel = $container->users();
    
    // Retrieve data from the POST form
    $user = $request->get(INPUT_POST, "user");
    $surname = $request->get(INPUT_POST, "surname");
    $pass = $request->get(INPUT_POST, "pass");
    $email = $request->get(INPUT_POST, "email");
    $phone = $request->get(INPUT_POST, "phone");
    $card_number = $request->get(INPUT_POST, "card_number");

    // Validate and escape the form data before using it

    // Call the model to register the user
    $taskModel->register($user, $surname, $pass, $email, $phone, $card_number);

    // Handle errors and redirection
    // Add a confirmation message in case of success

    // Redirect the user to the login page after registration
    $response->redirect("location: index.php?r=login");
    
    return $response;
}