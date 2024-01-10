<?php
session_start(); // Starting the session

include 'configurations.php';

$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // Retrieve the hashed password for the given email
    $data_query = $conn->prepare('SELECT password FROM users WHERE email = ?');
    $data_query->bind_param("s", $email);
    $data_query->execute();
    
    $result = $data_query->get_result();
    $row = $result->fetch_assoc();

    // If there's a result and the password is correct
    if ($row && password_verify($password, $row['password'])) {
        // Storing email in session. You can store other details if necessary.
        $_SESSION['user_email'] = $email;

        header("Location: ../home.php");
        exit();
    } else {
        // Optionally: Redirect back to login with an error message
        // header("Location: ../login.php?error=Invalid credentials");
        // exit();
    }
}
