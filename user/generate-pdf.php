<?php
require('fpdf/fpdf.php');

$host = "localhost";
$user = "root";
$password = "";
$database = "tms"; // updated database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all successful payments
$sql = "SELECT chit_number, name, email FROM payment WHERE status = 'Completed'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);

    // Title
    $pdf->Cell(0, 10, 'Successful Khalti Payments', 0, 1, 'C');

    // Table headers
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Chit No.', 1);
    $pdf->Cell(60, 10, 'Name', 1);
    $pdf->Cell(90, 10, 'Email', 1);
    $pdf->Ln();

    // Table content
    $pdf->SetFont('Arial', '', 12);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row['chit_number'], 1);
        $pdf->Cell(60, 10, $row['name'], 1);
        $pdf->Cell(90, 10, $row['email'], 1);
        $pdf->Ln();
    }

    $pdf->Output('D', 'khalti_success_payments.pdf'); // Download PDF
} else {
    echo "No successful payments found.";
}

$conn->close();
?>
