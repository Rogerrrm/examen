<?php

function ctrlUpdateDadesUser($request, $response, $container) {

    $taskModel2 = $container->Users();
    
    // Retrieve data from the POST form
    $user = $request->get(INPUT_POST, "user");
    $surname = $request->get(INPUT_POST, "surname");
    $pass = $request->get(INPUT_POST, "pass");
    $email = $request->get(INPUT_POST, "email");
    $phone = $request->get(INPUT_POST, "phone");
    $card_number = $request->get(INPUT_POST, "card_number");
    $id_user_cambio = $request->get(INPUT_POST, 'id_user');
    
    // Call the model to update the user's information
    $update_user = $taskModel2->editUser($user, $surname, $pass, $email, $phone, $card_number, $id_user_cambio);
    
    // Set the "update_user" variable for the response
    $response->set("update_user", $update_user);

    // Set the template for the response
    $response->setTemplate("admincontroller.php");
    
    return $response;
}
