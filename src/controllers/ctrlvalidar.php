<?php

function ctrlvalidar($request, $response, $container){

$codigoCorrecto = "5"; 

$codigoAcceso = $_POST['codigoAcceso'];

if ($codigoAcceso === $codigoCorrecto) {
    echo "true";
} else {
    echo "false";
    error_log("Código de acceso incorrecto: $codigoAcceso");
}
}