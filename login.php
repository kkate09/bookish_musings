<!DOCTYPE html>
<html>

<head>
    <!-- Set the title for the page -->
    <title>Bookish Musings - Login</title>
</head>

<body style="margin:0; padding:0; font-family: sans-serif;">

    <!-- Main banner with background image and overlay -->
    <div class="banner" style="
    width: 100%;
     height: 100vh;
      background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),
      url(assets/images/books_shadow.jpg);
       background-size: cover; 
       background-position: center;">

        <!-- Content wrapper centered in the middle of the banner -->
        <div class="content"
            style="width: 300px; 
            position: absolute;
             top: 50%;
              left: 50%; 
              transform: translate(-50%, -50%); 
              text-align: center;
               color: #fff;">

            <!-- Heading for the login form -->
            <h1 style="font-size: 50px;
             margin-bottom: 20px;">Login</h1>

            <!-- Start of the login form -->
            <form action="functions/login_functions.php" method="post">

                <!-- Username input field -->
                <input type="text" 
                name="email" placeholder="Email" required
                    style="
                    width: 100%; 
                    padding: 10px; 
                    margin-bottom: 15px;
                     border-radius: 25px;
                      border: 2px solid rgba(211, 161, 161, 0.619);
                       color: #000;">

                <!-- Password input field -->
                <input type="password" 
                  name="password" placeholder="Password" required
                    style="
                    width: 100%; 
                    padding: 10px;
                     margin-bottom: 15px;
                      border-radius: 25px;
                       border: 2px solid rgba(211, 161, 161, 0.619); 
                       color: #000;">

                <!-- Remember me checkbox and Forgot Password link side by side -->
                <div style="
                display: flex; 
                justify-content: space-between; 
                align-items: center;">
                
                    <!-- Remember me checkbox -->
                    <label style="color: #fff; font-weight: 100;">
                        <input type="checkbox" name="remember" style="margin-right: 10px;"> Remember me
                    </label>

                    <!-- Forgot Password link -->
                    <a href="/forgot-password" style="color: #fff; text-decoration: underline;">Forgot Password?</a>
                </div>

                <!-- Login button -->
                <button type="submit"
                    style="width: 200px; padding: 15px 0; text-align: center; margin-top: 20px; border-radius: 25px; font-weight: bold; border: 2px solid rgba(211, 161, 161, 0.619); background: transparent; color: #fff; cursor: pointer;">Log
                    In</button>
            </form>

            <!-- Registration prompt for new users -->
            <p style="
            margin-top: 20px; 
            font-weight: 100;
             line-height: 25px;">Don't have an account? <a href="register.php"
                    style="color: #fff; text-decoration: underline;">Register</a></p>
        </div>

    </div>

</body>

</html>