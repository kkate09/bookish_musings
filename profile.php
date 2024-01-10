<?php
session_start();  // Start the session

//connecting to db
include 'functions/configurations.php';
$conn = connectToDatabase();  

// Check if the user is logged in. If not, redirect to the login page.
if(!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];

// Fetch user data from the database based on the email.
$data_query = $conn->prepare('SELECT * FROM users WHERE email = ?');
$data_query->bind_param("s", $email);
$data_query->execute();

$result = $data_query->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish Musings - Profile Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body style="
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #F4EFEA;
">

<!-- Navigation Bar -->
<nav style="
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    background-color: #8C735B;
    box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
">
    <div style="font-size: 1.5em; color: white;">Bookish Musings</div>
    <div>
        <a href="home.php" style="margin-right: 15px; text-decoration: none; color: white;">
            <i class="fas fa-home" style="margin-right: 5px;"></i>
            Home
        </a>
        <a href="#" style="text-decoration: none; color: white;">
            <i class="fas fa-user" style="margin-right: 5px;"></i>
            Profile
        </a>
    </div>
</nav>

<!-- Main Content - Profile Management -->
<div style="padding: 40px 50px; max-width: 600px; margin: auto;">
    <!-- Profile Picture -->
    <div style="text-align: center; margin-bottom: 40px;">
        <img src="assets/images/books_shadow.jpg" alt="Profile Picture" style="width: 150px; height: 150px; border-radius: 50%; border: 2px solid #8C735B;">
        <div>
            <button style="margin-top: 10px; background-color: #8C735B; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Change Picture</button>
        </div>
    </div>

    <!-- Profile Fields -->
    <form action="change_password.php" method="post">
        <label style="color: #8C735B; margin-bottom: 10px; display: block;">Username</label>
        <input type="text" readonly value="<?php echo $user['user_name']; ?>" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

        <label style="color: #8C735B; margin-bottom: 10px; display: block;">First Name</label>
        <input type="text" readonly value="<?php echo $user['first_name']; ?>" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

        <label style="color: #8C735B; margin-bottom: 10px; display: block;">Last Name</label>
        <input type="text" readonly value="<?php echo $user['last_name']; ?>" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">
        
        <label style="color: #8C735B; margin-bottom: 10px; display: block;">Email</label>
        <input type="email" readonly value="<?php echo $user['email']; ?>" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

    
        <!-- Other Fields Can Be Added Here -->

        <div style="text-align: center;">
            <button type="submit" style="background-color: #8C735B; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Change Password</button>
        </div>
    </form>
</div>

<!-- Footer -->
<footer style="
    background-color: #8C735B;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0px -2px 10px rgba(0,0,0,0.1);
    margin-top: 40px;
">
    <p style="color: white;">© 2023 Bookish Musings. All rights reserved.</p>
</footer>

</body>
</html>
