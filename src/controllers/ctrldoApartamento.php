<?php

function ctrldoApartamento($request, $response, $container) {
    // Configure the database connection using PDO
    $db_host = 'localhost';
    $db_name = 'apf';
    $db_user = 'root';
    $db_pass = '1234';

    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // Configure PDO to throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // SQL query to retrieve apartment data from the database
        $sql = "SELECT id_apartment, apartment_name, high_season_price, low_season_price, num_roms, postal_address, square_meter, latitude, longitude, descripcio, id_user, id_services FROM apartment";

        // Prepare the SQL query
        $stmt = $pdo->prepare($sql);

        // Execute the SQL query
        $stmt->execute();

        // Fetch the results as an associative array
        $apartamento = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;

    // Include the template for rendering
    include "../src/views/apartamento.php";
    
    return $response;
}
