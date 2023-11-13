<?php
session_start();


if(isset($_POST['codigoAcceso'])) {
    $codigoAccesoIngresado = $_POST['codigoAcceso'];

    // Supongamos que tu código de acceso correcto está almacenado en algún lugar
    $codigoAccesoCorrecto = "hola";

    if ($codigoAccesoIngresado === $codigoAccesoCorrecto) {
        $_SESSION['identified'] = true;
        echo 'true';
    } else {
        echo 'false';
    }
} else {
    // Manejar el caso en el que no se proporciona el código de acceso
    echo 'false';
}
?>
