<?php
include 'configurations.php';
//database connection
$conn = connectToDatabase();


if($_SERVER["REQUEST_METHOD"]){
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $user_name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
}
//checking if email alredy exists
$email_query = $conn->prepare('SELECT * FROM users WHERE email = ?');
$email_query->bind_param("s", $email);
$email_query->execute();

$result = $email_query->get_result();
if($result->num_rows > 0){
    echo "email already in use";
}else {
    //checking if passwords match
    if($password != $confirm_password){
        echo "Passwords do not match";
    }
    else{
        //entering data into database
 $insert_query = $conn->prepare('INSERT INTO USERS(first_name,last_name,user_name,email,password) VALUES (?,?,?,?,?)');
$insert_query->bind_param("sssss",$first_name,$last_name,$user_name,$email,$hash_pass);
$insert_query->execute();
    header("Location: ../login.php");

    }
}