<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
//$gender = $_POST['gender'];
$email = $_POST['email'];
$dept = $_POST['dept'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
//$gender = stripslashes($gender);
//$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$dept = stripslashes($dept);
$dept = addslashes($dept);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
//$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name', '$dept', '$mob', '$email', '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:signnn.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>