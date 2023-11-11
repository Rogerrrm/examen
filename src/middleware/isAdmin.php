<?php
function isAdmin($request, $response, $container, $next){

    // Verifica si el usuario está autenticado
    $logged = $request->get("SESSION", "logged");

    if(!$logged) {
        // El usuario no está autenticado, redirige a la página de inicio de sesión
        $response->redirect("location: index.php?r=login");
        return $response;
    }

    // Obtiene el rol del usuario
    $user = $request->get("SESSION", "user");
    $rol = $user['rol_user']; // Suponiendo que tienes un campo "rol_user" en el objeto usuario

    // Verifica si el usuario tiene el rol de administrador
    if ($rol !== 'admin' && $rol !== 'gestor') {
        // El usuario no es administrador, redirige a otra página
        $response->redirect("location: index.php");
        return $response;
    }

    // Si el usuario está autenticado y tiene el rol de administrador, continúa con la solicitud
    $response->set("user", $user);
    $response = $next($request, $response, $container);

    return $response;   
}