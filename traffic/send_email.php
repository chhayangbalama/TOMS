<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once 'config.php'; // Make sure this points to your database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vehicle_number = $_POST['vehicle_number'];
    $fine_category = $_POST['fine_category'];
    $fine_amount = $_POST['fine_box'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $traffic_station = $_POST['traffic_station'];
    $notice = $_POST['notice'];

    // Create notification in database
    $title = "New Traffic Fine Issued";
    $message = "A fine of Rs. $fine_amount has been issued for $fine_category. Vehicle: $vehicle_number";
    
    $stmt = $conn->prepare("INSERT INTO notifications (user_email, title, message, fine_amount, vehicle_number, date_issued) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdss", $email, $title, $message, $fine_amount, $vehicle_number, $date);
    
    if (!$stmt->execute()) {
        echo json_encode(['success' => false, 'message' => "Database error: " . $stmt->error]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'your-app-password'; // Replace with your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your-email@gmail.com', 'Traffic Management System');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Traffic Fine Notice';
        
        $body = "
        <h2>Traffic Fine Notice</h2>
        <p>Dear $name,</p>
        <p>This is to inform you that a traffic fine has been issued against your vehicle.</p>
        <p><strong>Fine Details:</strong></p>
        <ul>
            <li>Vehicle Number: $vehicle_number</li>
            <li>Fine Category: $fine_category</li>
            <li>Fine Amount: Rs. $fine_amount</li>
            <li>Date: $date</li>
            <li>Location: $location</li>
            <li>Traffic Station: $traffic_station</li>
            <li>Notice: $notice</li>
        </ul>
        <p>Please make the necessary payment at your earliest convenience.</p>
        <p>Thank you for your cooperation.</p>
        <p>Best regards,<br>Traffic Management System</p>
        ";
        
        $mail->Body = $body;

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Email sent successfully']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
}
?> 