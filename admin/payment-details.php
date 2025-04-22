<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style1.css" />
  <title>Payment Details</title>
  <style>
    .status-paid {
      color: green;
      font-weight: bold;
    }

    .status-unpaid {
      color: red;
      font-weight: bold;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 12px 16px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .text {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
<div class="d-flex align-items-center">
          <div class="profile-section">
            <!-- <img src="img/user.jpg" alt="Profile" class="profile-avatar"> -->
            <span class="profile-name">👤 <?php echo $_SESSION['fullname']; ?></span>
          </div>
          </div>
          </nav>
  <div class="side-menu">
    <div class="brand-name">
      <a href="index.php">
        <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px; border-radius: 50px;" />
      </a>
      <h1 class="tm">TMS</h1>
    </div><br><br>

    <ul>
      <a href="index.php"><li><img src="img/dashboard1.jpg" style="height:35px; width:40px" alt=""/> <span>Dashboard</span></li></a>
      <a href="user.php"><li><img src="img/user0.png" style="height:45px" alt=""/> <span>User</span></li></a>
      <a href="traffic2.php"><li><img src="img/traffic2.jpg" style="height:40px; width:40px" alt=""/> <span>Traffic</span></li></a>
      <a href="payment-details.php"><li><img src="payment.jpeg" style="height:40px; width:40px" alt="">&nbsp;<span>Payment</span></li></a>
      <a href="echit.php"><li><img src="img/table0.png" style="height:40px; width:40px" alt=""/> <span>E-chit</span></li></a>
      <a href="complain.php"><li><img src="img/complain.jpg" style="height:40px; width:40px" alt=""/> <span>Complain</span></li></a>
      <a href="../login.html"><li><img src="img/log.jpg" style="height:40px; width:40px" alt=""/> <span>Logout</span></li></a>
    </ul>
  </div>

  <div class="container">
    <div class="header"><div class="nav"></div></div>

    <div class="content-2">
      <div class="recent-payments">
        <div class="title"><h2 class="text">Payment Records (E-Chit)</h2></div>
        <table>
          <tr>
            <th>Chit Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Fine Category</th>
            <th>Fine</th>
            <th>Status</th>
            <th>Payment Date</th>
          </tr>

          <?php
            $conn = mysqli_connect("localhost", "root", "", "tms");
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT chit_number, name, email, fine_category, fine_box, payment_status, payment_date FROM echit ORDER BY chit_number DESC";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $status = strtolower(trim($row["payment_status"]));
                $statusClass = ($status === "paid" || $status === "completed") ? "status-paid" : "status-unpaid";

                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["chit_number"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["fine_category"]) . "</td>";
                echo "<td>Rs. " . htmlspecialchars($row["fine_box"]) . "</td>";
                echo "<td class='$statusClass'>" . htmlspecialchars($row["payment_status"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["payment_date"]) . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='7'>No payment records found</td></tr>";
            }

            mysqli_close($conn);
          ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
