<?php
// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "", "tms");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the email parameter is set
if (isset($_POST["email"])) {
    $email = $_POST["email"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "DELETE FROM user WHERE email = ?");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('User with email $email deleted successfully.'); window.location.href='user.php';</script>";
        } else {
            echo "Error deleting user: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare SQL statement.";
    }
} else {
    echo "No email parameter specified.";
}

// Close MySQL database connection
mysqli_close($conn);
?>
