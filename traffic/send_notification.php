<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic_offense_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user details from form submission
$license_number = $_POST['license_number'];
$vehicle_number = $_POST['vehicle_number'];
$offense_type = $_POST['offense_type'];
$fine_amount = $_POST['fine_amount'];

// Fetch user ID from database
$sql = "SELECT id FROM users WHERE license_number = ? OR vehicle_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $license_number, $vehicle_number);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    
    // Insert notification into database
    $notification = "You have been charged with a traffic offense: $offense_type. Fine: NPR $fine_amount.";
    $insert_sql = "INSERT INTO notifications (user_id, message, status) VALUES (?, ?, 'unread')";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("is", $user_id, $notification);
    
    if ($insert_stmt->execute()) {
        echo "Notification saved successfully.";
    } else {
        echo "Failed to save notification.";
    }
    
    $insert_stmt->close();
} else {
    echo "No registered user found for the given details.";
}

$stmt->close();
$conn->close();
?>
