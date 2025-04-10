<?php
// Start session if needed (optional, if you're using sessions elsewhere)
// session_start();

// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "", "tms");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the chit_number is received via POST
if (isset($_POST['chit_number'])) {
  $chit_number = $_POST['chit_number'];

  // Check if chit_number is numeric
  if (!is_numeric($chit_number)) {
    die("Invalid chit number.");
  }

  // Prepare and execute the DELETE query safely
  $stmt = $conn->prepare("DELETE FROM echit WHERE chit_number = ?");
  $stmt->bind_param("i", $chit_number);

  if ($stmt->execute()) {
    echo "<script>alert('Record deleted successfully'); window.location.href='echit.php';</script>";
  } else {
    echo "Error deleting record: " . $stmt->error;
  }

  $stmt->close();
} else {
  echo "No chit number provided.";
}

// Close database connection
mysqli_close($conn);
?>
