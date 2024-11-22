<?php
include('dbconnection.php');
session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $mob = mysqli_real_escape_string($con, $_POST['mob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];// Hashing the password

    $ret = mysqli_query($con, "SELECT email FROM user WHERE email='$email'");
    $result = mysqli_fetch_array($ret);

    if ($result > 0) {
        $msg = "This email is already associated with another account";
        header("Location: signnn.php?q7=$msg");
    } else {
        $query = mysqli_query($con, "INSERT INTO user (name, class, year, mob, email, password) VALUES('$name', '$class', '$year', '$mob' ,'$email', '$password')");

        if ($query) {
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $name;
            $_SESSION["class"] = $class;
            $_SESSION["year"] = $year;

            header("Location: account.php");
            exit(); // Make sure no further code is executed after the redirect
        } else {
            $msg = "Registration failed, please try again";
            header("Location: signnn.php?q7=$msg");
            exit();
        }
    }
} 
?>
