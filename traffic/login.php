<?php
session_start(); // Start the session

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $con = new mysqli('localhost', 'root', '', 'tms');

    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    } else {
        // Prepare and execute SQL query securely
        $stmt = $con->prepare("SELECT * FROM traffic WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();

            // Compare password (you should hash this in production)
            if ($data['password'] === $password) {
                // Store user info in session
                $_SESSION['fullname'] = $data['fullname'];
                $_SESSION['email'] = $data['email'];

                echo "<script>alert('Login Successful'); window.location.href='trafficdash.php';</script>";
                exit();
            } else {
                echo "<script>alert('Invalid email or password'); window.location.href='login.html';</script>";
                exit();
            }
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href='login.html';</script>";
            exit();
        }
    }
} else {
    // Redirect if accessed directly
    header("Location: login.html");
    exit();
}
