<?php

function ctrlDoReserve($request, $response, $container) {
    $taskModel = $container->apf();
    
    // Retrieve data from the reservation form
    $id_user = $request->get(INPUT_POST, "id_user");
    $id_apartment = $request->get(INPUT_POST, "id_apartment");
    $high_season_price = $request->get(INPUT_POST, "high_season_price");
    $low_season_price = $request->get(INPUT_POST, "low_season_price");
    $entry_date = $request->get(INPUT_POST, "entry_date");
    $departure_date = $request->get(INPUT_POST, "departure_date");
    $num_rooms = $request->get(INPUT_POST, "num_rooms");

    // Validate and escape the form data before using them
    $db_host = 'localhost';
    $db_name = 'apf';
    $db_user = 'root';
    $db_pass = '1234';

    // Establish a PDO connection to the database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    $new_entry_date = $entry_date;
    $new_departure_date = $departure_date;

    // SQL query to retrieve existing reservations for the specific apartment
    $sql = "SELECT entry_date, departure_date FROM reserve WHERE id_apartment = :id_apartment";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_apartment', $id_apartment, PDO::PARAM_INT);
    $stmt->execute();
    $existing_reserves = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $reservation_conflict = false;

    foreach ($existing_reserves as $reserve) {
        $entry_dates = $reserve['entry_date'];
        $departure_dates = $reserve['departure_date'];

        // Check if the dates overlap
        if (($new_entry_date >= $entry_dates && $new_entry_date <= $departure_dates) ||
            ($new_departure_date >= $entry_dates && $new_departure_date <= $departure_dates) ||
            ($new_entry_date <= $entry_dates && $new_departure_date >= $departure_dates)) {
            // There is a conflicting reservation
            $reservation_conflict = true;
            break;
        }
    }

    if ($reservation_conflict) {
        // There is a reservation conflict, display an error message
        $error_message = "We're sorry, the reservation could not be completed because these dates are already booked by another user.";

        // Example of redirection with the error message
        header("Location: index.php?r=reserve&error=" . urlencode($error_message));

    } else {
        // No conflicts, you can proceed with the reservation
        // Call the model to add the reservation
        $taskModel->addReserve($id_user, $id_apartment, $entry_date, $departure_date, $num_rooms, $high_season_price, $low_season_price);
        $response->redirect("location: index.php?r=reserve");

        return $response;
    }
}
