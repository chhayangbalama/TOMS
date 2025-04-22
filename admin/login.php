<?php
session_start();

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection
$con = new mysqli('localhost', 'root', '', 'tms');
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$stmt = $con->prepare("SELECT * FROM admin WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();

if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();

    if ($data['password'] === $password) {
        $_SESSION['fullname'] = $data['fullname'];
        $_SESSION['email'] = $data['email'];

        echo "<script>alert('Login Successful'); window.location.href='admindash.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or password'); window.location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('Invalid Email or password'); window.location.href='login.html';</script>";
}
