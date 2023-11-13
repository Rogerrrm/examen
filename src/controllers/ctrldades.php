<?php

function ctrlDades($request, $response, $container) {
    // Configure the database connection using PDO
    $db_host = 'localhost';
    $db_name = 'apf';
    $db_user = 'root';
    $db_pass = '1234';

    // Create a PDO instance to connect to the database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // Configure PDO to throw exceptions in case of errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Get the user from the session
        $user = $_SESSION['user']['user'];

        // SQL query to retrieve specific user data based on their username
        $sql = "SELECT * FROM user WHERE user = :user";

        // Prepare the SQL query
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);

        // Execute the SQL query
        $stmt->execute();

        // Fetch the results
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;

    // Include the template to display the user data
    include "../src/views/dades.php";

    return $response;
}
