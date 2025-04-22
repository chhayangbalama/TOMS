<?php
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','tms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into admin(fullname, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $fullname, $email, $password);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();

		if($execval) {
			// show pop-up message
			echo '<script>alert("Account created successfully!");</script>';
			// redirect to login page
			echo '<script>window.location.href = "login.html";</script>';
		} else {
			echo "<script>alert('Error in registration'); window.location.href='signup.html';</script>";
			//echo "Error in registration";
		}
	}
?>
