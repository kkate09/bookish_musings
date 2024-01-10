<?php

include 'configurations.php';
$conn = connectToDatabase();

session_start();

$email = $_SESSION['user_email'];

// Fetch the current hashed password from the database
$query = $conn->prepare('SELECT password FROM users WHERE email = ?');
$query->bind_param('s', $email);
$query->execute();

$result = $query->get_result();
$user = $result->fetch_assoc();

$current_hashed_password = $user['password'];

// Validate current password
if(password_verify($_POST['current_password'], $current_hashed_password)) {
    
    // Check if new password and confirm password are the same
    if($_POST['new_password'] == $_POST['confirm_password']) {

        // Hash the new password and update in the database
        $new_password_hash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

        $update_query = $conn->prepare('UPDATE users SET password = ? WHERE email = ?');
        $update_query->bind_param('ss', $new_password_hash, $email);
        $update_query->execute();

        // Redirect with a success message (or handle it your preferred way)
        header("Location: profile.php?status=success");
    } else {
        // Redirect with an error message for mismatched passwords
        header("Location: ../profile.php?status=password_mismatch");
    }
} else {
    // Redirect with an error message for incorrect current password
    header("Location: ../profile.php?status=incorrect_password");
}

?>
