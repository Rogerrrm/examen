<?php

function ctrlDoLogin($request, $response, $container) {
   
    $Nom = $request->get(INPUT_POST, "nom");
    $apellido = $request->get(INPUT_POST, "apellido");
    

    $userModel = $container->users();

    $userModel = $userModel->login($Nom, $apellido);

    if ($userModel) {
        $response->setSession("Nom", $userModel);
        $response->setSession("logged", true);

        $response->redirect("location: index.php?r=dades");
    } else {
        $response->redirect("location: index.php?r=login");
    }

    return $response;
}
