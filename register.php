<!DOCTYPE html>
<html>

<head>
    <!-- Set the title for the page -->
    <title>Bookish Musings - Registration</title>
</head>

<body style="margin:0; padding:0; font-family: sans-serif;">

    <!-- Main banner with background image and overlay -->
    <div class="banner"
        style="width: 100%; height: 100vh; background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),url(assets/images/books_shadow.jpg); background-size: cover; background-position: center;">

        <!-- Content wrapper centered in the middle of the banner -->
        <div class="content"
            style="width: 350px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff;">

            <!-- Heading for the registration form -->
            <h1 style="font-size: 50px; margin-bottom: 20px;">Register</h1>

            <!-- Start of the registration form -->
            <form action="functions/reg_functions.php" method="post" enctype="multipart/form-data">

                <!-- First Name input field -->
                <input type="text" name="first_name" placeholder="First Name" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Last Name input field -->
                <input type="text" name="last_name" placeholder="Last Name" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Username input field -->
                <input type="text" name="username" placeholder="Username" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Email input field -->
                <input type="email" name="email" placeholder="Email (Unique)" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Password input field -->
                <input type="password" name="password" placeholder="Password" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Confirm Password input field -->
                <input type="password" name="confirm_password" placeholder="Confirm Password" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 25px; border: 2px solid rgba(211, 161, 161, 0.619); color: #000;">

                <!-- Profile Picture input (optional) -->
                <input type="file" name="profile_picture" accept="image/*" style="margin-bottom: 10px;">

                <!-- Register button -->
                <button type="submit"
                    style="width: 200px; padding: 15px 0; text-align: center; margin-top: 10px; border-radius: 25px; font-weight: bold; border: 2px solid rgba(211, 161, 161, 0.619); background: transparent; color: #fff; cursor: pointer;">Register</button>
            </form>

            <!-- Login prompt for users who already have an account -->
            <p style="margin-top: 20px; font-weight: 100; line-height: 25px;">Already have an account? <a href="login.php"
                    style="color: #fff; text-decoration: underline;">Login</a></p>
        </div>

    </div>

</body>

</html>