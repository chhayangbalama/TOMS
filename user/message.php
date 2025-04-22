<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if (isset($_SESSION['transaction_msg'])) {
    echo $_SESSION['transaction_msg'];
    unset($_SESSION['transaction_msg']);
}
?>
<div class="container mt-5">
    <div class="card shadow p-4 text-center">
        <h3>🎉 Thank you!</h3>
        <p>Your traffic fine has been paid successfully.</p>
        <a href="userdash.php" class="btn btn-primary">Back</a>
    </div>
</div>
</body>
</html>
