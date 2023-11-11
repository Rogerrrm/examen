<?php

function ctrlUpdateDades($request, $response, $container) {
    // Configure the PDO database connection (as you did in your original code)
    $db_host = 'localhost';
    $db_name = 'apf';
    $db_user = 'root';
    $db_pass = '1234';

    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Get the data sent from the form
        $user = $_POST['user'];
        $surname = $_POST['surname'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $card_number = $_POST['card_number'];

        // Check that the new username is not already in use by another user
        $checkUserSql = "SELECT COUNT(*) as count FROM user WHERE user = :newUser AND user != :currentUser";
        $checkStmt = $pdo->prepare($checkUserSql);
        $checkStmt->bindParam(':newUser', $user, PDO::PARAM_STR);
        $checkStmt->bindParam(':currentUser', $_SESSION['user']['user'], PDO::PARAM_STR);
        $checkStmt->execute();
        $result = $checkStmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            echo "The new username is already in use by another user.";
        } else {
            // Update the data in the database, including the "user" field
            $updateSql = "UPDATE user SET user = :newUser, surname = :surname, pass = :pass, email = :email, phone = :phone, card_number = :card_number WHERE user = :currentUser";
            $updateStmt = $pdo->prepare($updateSql);
            $updateStmt->bindParam(':newUser', $user, PDO::PARAM_STR);
            $updateStmt->bindParam(':currentUser', $_SESSION['user']['user'], PDO::PARAM_STR);
            $updateStmt->bindParam(':surname', $surname, PDO::PARAM_STR);
            $updateStmt->bindParam(':pass', $pass, PDO::PARAM_STR);
            $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
            $updateStmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $updateStmt->bindParam(':card_number', $card_number, PDO::PARAM_STR);
            $updateStmt->execute();

            // Redirect the user back to the data page or wherever you want after the update
            if($_SESSION['user']['rol_user'] != "usuario") {
                header('Location: index.php?r=admincontroller');
            } else {
                header('Location: index.php?r=login');
            };
        }
    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    $pdo = null;

    return $response;
}
