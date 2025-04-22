<?php
session_start();

if (isset($_POST['submit'])) {
    $amount = $_POST['amount'] * 100;
    $chit_number = $_POST['chit_number'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($amount) || empty($chit_number) || empty($name) || empty($email) || empty($phone)) {
        $_SESSION['validate_msg'] = '<script>Swal.fire({ icon: "error", title: "All fields are required", timer: 1500 });</script>';
        header("Location: payment.php");
        exit;
    }

    // Store in session to use after redirect
    $_SESSION['chit_number'] = $chit_number;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;

    $data = [
        "return_url" => "http://localhost/toms/user/payment-response.php",
        "website_url" => "http://localhost/toms/",
        "amount" => $amount,
        "purchase_order_id" => $chit_number,
        "purchase_order_name" => "Traffic Fine - $chit_number",
        "customer_info" => [
            "name" => $name,
            "email" => $email,
            "phone" => $phone
        ]
    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
            'Content-Type: application/json'
        ],
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    $res = json_decode($response, true);

    if (isset($res['payment_url'])) {
        header("Location: " . $res['payment_url']);
        exit;
    } else {
        echo "Khalti Error: " . $response;
    }
}
?>
