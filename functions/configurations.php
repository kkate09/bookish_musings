<?php

function connectToDatabase() {
    // Connection variables
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "bookish"; 

    // Create a new connection
    $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    return $conn;
}

?>
