<?php
// Include configuration and necessary files
include "../src/config.php";
include "../src/controllers/ctrlIndex.php";
include "../src/controllers/ctrllogin.php";
include "../src/controllers/ctrlDoLogin.php";
include "../src/controllers/ctrlDoLogout.php";
include "../src/controllers/ctrlRegister.php";
include "../src/controllers/ctrlDoRegister.php";
include "../src/controllers/ctrldades.php";
include "../src/controllers/ctrllistado.php";
include "../src/controllers/ctrlDolistado.php";


// Include middleware files
include "../src/middleware/isLogged.php";

// Include container and request/response classes
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

// Create instances of the Request, Response, and Container classes
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

// Determine the route 'r' based on the request
$r = '';
if (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];
}

// Route handling based on the value of 'r'
if ($r == "") {
  $response = ctrlIndex($request, $response, $container);
}  elseif ($r == "login") {
  $response = ctrlLogin($request, $response, $container);
} elseif ($r == "register") {
  $response = ctrlRegister($request, $response, $container);
} elseif ($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
} elseif ($r == "dologout") {
  $response = ctrlDoLogout($request, $response, $container);
} elseif ($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container); 
} elseif ($r == "dades") {
  $response = ctrldades($request, $response, $container); 
} elseif ($r == "listado") {
  $response = ctrllistado($request, $response, $container); 
} elseif ($r == "dolistado") {
  $response = ctrlDolistado($request, $response, $container); 
} else {
  echo "No existe la ruta";
}

// Execute the response to handle the route
$response->response();
