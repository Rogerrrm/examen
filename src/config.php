<?php
/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

$config = [
    "db" => [
        "user" => "root",
        "pass" => "1234",
        "db" => "apf",
        "host" => "localhost"
    ],
];


include "../src/models/apf.php";
include "../src/models/Db.php";
include "../src/models/Users.php";