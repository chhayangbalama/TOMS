<?php
session_start();

$pidx = $_GET['pidx'] ?? null;

if ($pidx) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/lookup/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(['pidx' => $pidx]),
        CURLOPT_HTTPHEADER => [
            'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
            'Content-Type: application/json'
        ],
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    $res = json_decode($response, true);
    file_put_contents("khalti_log.txt", print_r($res, true)); // debug file

    if (isset($res['status']) && $res['status'] === 'Completed') {
        // Get from response or session
        $chit_number = $res['purchase_order_id'] ?? $_SESSION['chit_number'] ?? null;
        $amount = isset($res['total_amount']) ? $res['total_amount'] / 100 : 0;
        $transaction_id = $res['transaction_id'] ?? '';
        $payment_status = 'paid';

        if ($chit_number && $amount > 0 && $transaction_id !== '') {
            $conn = new mysqli('localhost', 'root', '', 'tms');
            if ($conn->connect_error) {
                $_SESSION['transaction_msg'] = '<script>Swal.fire({ icon: "error", title: "DB connection failed", timer: 2000 });</script>';
                header("Location: payment.php");
                exit;
            }

            // Check duplicate
            $checkStmt = $conn->prepare("SELECT id FROM payment WHERE transaction_id = ?");
            $checkStmt->bind_param("s", $transaction_id);
            $checkStmt->execute();
            $checkStmt->store_result();

            if ($checkStmt->num_rows === 0) {
                $checkStmt->close();

                $stmt = $conn->prepare("INSERT INTO payment (chit_number, amount, transaction_id, payment_date, payment_status) VALUES (?, ?, ?, NOW(), ?)");
                $stmt->bind_param("idss", $chit_number, $amount, $transaction_id, $payment_status);
                $stmt->execute();
                $stmt->close();

                $stmt2 = $conn->prepare("UPDATE echit SET payment_status = 'paid', payment_date = NOW() WHERE chit_number = ?");
                $stmt2->bind_param("i", $chit_number);
                $stmt2->execute();
                $stmt2->close();
            } else {
                $checkStmt->close();
            }

            $conn->close();
            $_SESSION['transaction_msg'] = '<script>Swal.fire({ icon: "success", title: "Payment Successful", timer: 1500 });</script>';
            header("Location: message.php");
            exit;
        } else {
            $_SESSION['transaction_msg'] = '<script>Swal.fire({ icon: "error", title: "Missing payment details", timer: 2000 });</script>';
            header("Location: payment.php");
            exit;
        }
    } else {
        $_SESSION['transaction_msg'] = '<script>Swal.fire({ icon: "error", title: "Payment Failed", timer: 2000 });</script>';
        header("Location: payment.php");
        exit;
    }
} else {
    $_SESSION['transaction_msg'] = '<script>Swal.fire({ icon: "error", title: "Invalid Payment Request", timer: 1500 });</script>';
    header("Location: payment.php");
    exit;
}
?>
