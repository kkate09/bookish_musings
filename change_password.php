<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish Musings - Change Password</title>
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
        <a href="profile.php" style="text-decoration: none; color: white;">
            <i class="fas fa-user" style="margin-right: 5px;"></i>
            Profile
        </a>
    </div>
</nav>

<!-- Main Content - Change Password -->
<div style="padding: 40px 50px; max-width: 400px; margin: auto;">
    <h2 style="color: #8C735B; text-align: center;">Change Password</h2>

    <!-- Change Password Form -->
    <form action="functions/password_functions.php" method="post">
        <!-- Current Password -->
        <label style="color: #8C735B; margin-bottom: 10px; display: block;">Current Password</label>
        <input type="password" name="current_password" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

        <!-- New Password -->
        <label style="color: #8C735B; margin-bottom: 10px; display: block;">New Password</label>
        <input type="password" name="new_password" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

        <!-- Confirm New Password -->
        <label style="color: #8C735B; margin-bottom: 10px; display: block;">Confirm New Password</label>
        <input type="password" name="confirm_password" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #8C735B; border-radius: 5px;">

        <div style="text-align: center;">
            <button type="submit" style="background-color: #8C735B; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Update Password</button>
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
