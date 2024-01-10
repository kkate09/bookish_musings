<?php
include '../functions/configurations.php';
$conn = connectToDatabase();

// Start the session
session_start();

// Check if the user is logged in. If not, redirect to the login page.
if(!isset($_SESSION['user_email'])) {
    header("Location: ../login.php");
    exit();
}

$email = $_SESSION['user_email'];

// Fetch user data from the database based on the email.
$data_query = $conn->prepare('SELECT * FROM users WHERE email = ?');
$data_query->bind_param("s", $email);
$data_query->execute();

$result = $data_query->get_result();
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];
    $review = $_POST['review'];
    $isbn = $_POST['isbn'];

    // Handle Image Upload
    $target_dir = "book_covers/";
    $target_file = $target_dir . basename($_FILES["cover_image"]["name"]);

    if (move_uploaded_file($_FILES["cover_image"]["tmp_name"], $target_file)) {
        $cover_image_path = $target_file;
    } else {
        die("Error uploading cover image.");
    }
    
    // Insert book data into the database
    $stmt = $conn->prepare("INSERT INTO books (user_id, title, author, publication_year, review, isbn, cover_image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ississs', $user['user_id'], $title, $author, $publication_year, $review, $isbn, $cover_image_path);

    if ($stmt->execute()) {
        header('Location: ../home.php');
    } else {
        die("Error adding book: " . $stmt->error);
    }

    $stmt->close();
}
?>
