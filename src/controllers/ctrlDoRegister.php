<?php

function ctrlDoRegister($request, $response, $container) {
    $taskModel = $container->users();
    
    $Nom = $request->get(INPUT_POST, "Nom");
    $Cognoms = $request->get(INPUT_POST, "Cognoms");
    $Datanaixement = $request->get(INPUT_POST, "Datanaixement");
    $adreca = $request->get(INPUT_POST, "adreca");
    
    $resguardo_name = $_FILES['resguardo']['name'];
    $resguardo_tmp_name = $_FILES['resguardo']['tmp_name'];
    $resguardo_path = "img/" . $resguardo_name;
    move_uploaded_file($resguardo_tmp_name, $resguardo_path);

    $codigoRegistro = $taskModel->register($Nom, $Cognoms, $Datanaixement, $adreca);

    if ($codigoRegistro) {
        $response->redirect("dades.php?codigo=" . $codigoRegistro['codigo'] . "&nombre=" . urlencode($codigoRegistro['nombre']) . "&apellidos=" . urlencode($codigoRegistro['apellidos']));
    } else {
        $response->redirect("index.php?r=login");
    }

    return $response;
}

