<?php

function ctrlIndex($request, $response, $container){

    $taskModel = $container->examen();

    $user = $request->get("SESSION", "user");

    $apfs = $taskModel->getAll($user["id_user"]);

    $response->set("apfs", $apfs);

    $response->setTemplate("index.php");

    return $response;
}
