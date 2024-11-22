<?php
include_once 'dbConnection.php';

session_start(); // Start the session at the beginning

$ref = $_GET['q'] ?? ''; // Use null coalescing operator for better practice
$email = $_POST['uname'];
$password = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = $con->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Session handling
    $row = $result->fetch_assoc(); // Fetch the result
    $admid = $row['admid']; // Get the admid from the fetched row

    $_SESSION["name"] = 'Admin';
    $_SESSION["key"] = 'rppendharkar03';
    $_SESSION["email"] = $email;
    $_SESSION["admid"] = $admid;

    header("location:dash.php?q=0");
} else {
    header("location:$ref?w=Warning: Access denied");
}
?>
