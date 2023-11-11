<?php
// Include configuration and necessary files
include "../src/config.php";
include "../src/controllers/ctrlIndex.php";
include "../src/controllers/ctrlAdd.php";
include "../src/controllers/ctrllogin.php";
include "../src/controllers/ctrlDoLogin.php";
include "../src/controllers/ctrlDoLogout.php";
include "../src/controllers/ctrlRegister.php";
include "../src/controllers/ctrlDoRegister.php";
include "../src/controllers/ctrlDades.php";
include "../src/controllers/ctrlUpdateDades.php";
include "../src/controllers/ctrlDoRegisterGestor.php";
include "../src/controllers/ctrlRegisterGestor.php";
include "../src/controllers/ctrlAddApartamento.php";
include "../src/controllers/ctrldoApartamento.php";
include "../src/controllers/ctrlProcesarApartamento.php";
include "../src/controllers/ctrlreserve.php";
include "../src/controllers/ctrlFormreserve.php";
include "../src/controllers/ctrldelete.php";
include "../src/controllers/ctrlDeleteReserve.php";
include "../src/controllers/ctrlDeleteUser.php";
include "../src/controllers/ctrlDoReserve.php";
include "../src/controllers/ctrladmincontroller.php";
include "../src/controllers/ctrlUpdateDadesAdmin.php";
include "../src/controllers/ctrlUpdateDadesUser.php";
include "../src/controllers/ctrlBuscarApartamento.php";
include "../src/controllers/ctrlBuscar.php";

// Include middleware files
include "../src/middleware/isLogged.php";
include "../src/middleware/isAdmin.php";

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
} elseif ($r == "add") {
  $response = isLogged($request, $response, $container, "ctrlAdd");
} elseif ($r == "delete") {
  $response = isLogged($request, $response, $container, "ctrlDelete");
} elseif ($r == "deletereserve") {
  $response = isLogged($request, $response, $container, "ctrlDeleteReserve");
} elseif ($r == "deleteuser") {
  $response = isLogged($request, $response, $container, "ctrlDeleteUser");
} elseif ($r == "login") {
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
  $response = isLogged($request, $response, $container,"ctrlDades");
} elseif ($r == "updatedades") {
  $response = isLogged($request, $response, $container,"ctrlUpdateDades");
} elseif ($r == "updatedadesuser") {
  $response = isAdmin($request, $response, $container,"ctrlUpdateDadesUser");
} elseif ($r == "doregistergestor") {
  $response = isAdmin($request, $response, $container,"ctrlDoRegisterGestor");
} elseif ($r == "registergestor") {
  $response = isAdmin($request, $response, $container,"ctrlRegisterGestor");
} elseif ($r == "addapartamento") {
  $response = isAdmin($request, $response, $container, "ctrlAddApartamento");
} elseif ($r == "doapartamento") {
  $response = isLogged($request, $response, $container,"ctrldoApartamento");
} elseif ($r == "procesarapartamento") {
  $response = isLogged($request, $response, $container,"ctrlProcesarApartamento");
} elseif ($r == "reserve") {
  $response = isLogged($request, $response, $container,"ctrlReserve");
} elseif ($r == "formreserve") {
  $response = isLogged($request, $response, $container,"ctrlFormReserve");
} elseif ($r == "delete") {
  $response = isLogged($request, $response, $container,"ctrlDelete");
} elseif ($r == "doreserve") {
  $response = isLogged($request, $response, $container,"ctrlDoReserve");
} elseif ($r == "admincontroller") {
  $response = isAdmin($request, $response, $container, "ctrladmincontroller");
} elseif ($r == "updatedadesadmin") {
  $response = isAdmin($request, $response, $container, "ctrlUpdateDadesAdmin");
} elseif ($r == "buscarapartamento") {
  $response = isLogged($request, $response, $container, "ctrlBuscarApartamento");
} elseif ($r == "buscar") {
  $response = isLogged($request, $response, $container, "ctrlBuscar");
} else {
  echo "No existe la ruta";
}

// Execute the response to handle the route
$response->response();
