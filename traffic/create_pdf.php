<?php
// Generate a six-digit chit number
$chit_number = rand(100000, 999999);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include necessary libraries
require('vendor/autoload.php');
require('fpdf/fpdf.php');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$vehicle_number = $_POST['vehicle_number'];
$license_number = $_POST['license_number'];
$fine_category = $_POST['fine_category']; // Offense type
$fine_box = $_POST['fine_box']; // Fine amount
$location = $_POST['location'];
$traffic_station = $_POST['traffic_station'];
$police_name = $_POST['police_name'];
$notice = $_POST['notice'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tms');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Insert eChit data into database
$stmt = $conn->prepare("INSERT INTO echit(name, email, date, vehicle_number, license_number, fine_category, fine_box, location, traffic_station, police_name, notice, chit_number) 
                        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisissssi", $name, $email, $date, $vehicle_number, $license_number, $fine_category, $fine_box, $location, $traffic_station, $police_name, $notice, $chit_number);
$execval = $stmt->execute();
$stmt->close();

if (!$execval) {
    die('<script>alert("Data saving failed!");</script>');
}

// Generate PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'E-Chit', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Chit Number: ' . $chit_number, 0, 1, 'R');
$pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Date: ' . $date, 0, 1);
$pdf->Cell(0, 10, 'Vehicle Number: ' . $vehicle_number, 0, 1);
$pdf->Cell(0, 10, 'License Number: ' . $license_number, 0, 1);
$pdf->Cell(0, 10, 'Fine Category: ' . $fine_category, 0, 1);
$pdf->Cell(0, 10, 'Fine Amount: NPR ' . $fine_box, 0, 1);
$pdf->Cell(0, 10, 'Location: ' . $location, 0, 1);
$pdf->Cell(0, 10, 'Traffic Station: ' . $traffic_station, 0, 1);
$pdf->Cell(0, 10, 'Police Name: ' . $police_name, 0, 1);
$pdf->Cell(0, 10, 'Notice: ' . $notice, 0, 1);
$pdf->MultiCell(0, 10, 'Please write the specified chit number in the remarks section during the payment.', 0, 'C');

$pdf_data = $pdf->Output('S'); // PDF output as string

// =======================
// 📧 Send Email using PHPMailer
// =======================

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'np03cs4a220016@heraldcollege.edu.np'; // your Gmail
    $mail->Password   = 'whlrvfkfwjtxqszr';     // your Gmail App Password (not your regular password)
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('np03cs4a220016@heraldcollege.edu.np', 'Traffic Police Department');
    $mail->addAddress($email, $name); // user email

    // Attachments
    $mail->addStringAttachment($pdf_data, 'EChit-' . $chit_number . '.pdf');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Your E-Chit From Traffic Management System';
    $mail->Body    = "
        <h3>Dear $name,</h3>
        <p>Your traffic violation has been recorded successfully. Please find your e-chit attached.</p>
        <p><strong>Chit Number:</strong> $chit_number</p>
        <p><strong>Fine Amount:</strong> NPR $fine_box</p>
        <p>Please make the payment and keep this chit for reference.</p>
        <br><p>Regards,<br>Traffic Management Team</p>
    ";

    $mail->send();
    echo "<script>alert('E-Chit created and email sent successfully!'); window.location.href='efine.php';</script>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
