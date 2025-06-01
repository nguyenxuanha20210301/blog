<?php
require 'config/database.php';

// get signup form data if signup button was clicked 
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    // var_dump($avatar);
    // echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;

    //validate input values 
    if (!$firstname) {
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your Username";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid Email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password should be 8+ characters";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Please add avatar";
    } else {
        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            //hash password 
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            //check if username or email already exist in database
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Username or Email already exist";
            } else {
                // work
            }
        }
    }
} else {
    header('Location: ' . ROOT_URL . 'signup.php');
    die();
}
