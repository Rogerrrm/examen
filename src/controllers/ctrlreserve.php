<?php

function ctrlReserve($request, $response, $container) {
    // Configure the PDO database connection
    $db_host = 'localhost';
    $db_name = 'apf';
    $db_user = 'root';
    $db_pass = '1234';

    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // Configure PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Get the ID of the current user (make sure to retrieve it securely)
        $userId = $_SESSION['user']['id_user'];

        // Execute a SELECT query with JOIN operations
        $sql = "SELECT a.id_apartment, a.apartment_name, a.high_season_price, a.low_season_price, a.num_roms, a.postal_address, a.square_meter, a.latitude, a.longitude, a.descripcion, a.direction, a.id_user, s.name_services, r.entry_date, r.departure_date, r.season_status, r.id_reserve, r.num_rooms, r.reserve_status
                FROM apartment a 
                INNER JOIN reserve r ON a.id_apartment = r.id_apartment
                JOIN services s ON a.id_services = s.id_services
                WHERE r.id_user = :user
                ORDER BY r.departure_date DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user', $userId, PDO::PARAM_INT);
        $stmt->execute();

        // Retrieve the results
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;

    // Include the template for rendering the reservation information
    include "../src/views/reserve.php";

    return $response;
}
