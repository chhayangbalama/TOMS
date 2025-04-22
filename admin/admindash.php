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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/">
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
                <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px; border-radius: 50px;">&nbsp;
            </a>
            <h1 class="tm">TMS</h1>
        </div><br>

        <ul>
            <a href="admindash.php"><li><img src="img/dashboard1.jpg" style="height:35px; width:40px" alt="">&nbsp; <span>Dashboard</span></li></a>
            <a href="user.php"><li><img src="img/user0.png" style="height:45px" alt="">&nbsp;<span>User</span></li></a>
            <a href="traffic2.php"><li><img src="img/traffic2.jpg" style="height:40px; width:40px" alt="">&nbsp;<span>Traffic</span></li></a>
            <a href="payment-details.php"><li><img src="payment.jpeg" style="height:40px; width:40px" alt="">&nbsp;<span>Payment</span></li></a>
            <a href="echit.php"><li><img src="img/table0.png" style="height:40px; width:40px" alt="">&nbsp;<span>E-chit</span></li></a>
            <a href="complain.php"><li><img src="img/complain.jpg" style="height:40px; width:40px" alt="">&nbsp;<span>Complain</span></li></a>
            <div class="d-flex align-items-center">
                <a href="../login.html"><li><img src="img/log.jpg" style="height:40px; width:40px" alt="">&nbsp;<span>Logout</span></li></a>
        </ul>
    </div>

    <div class="container">
        <div class="header"><div class="nav"></div></div>
        <div class="content">
            <div class="heads" style="padding:20px;"><h1>Dashboard</h1></div> 
            <div class="cards">

                <!-- User Card -->
                <a href="user.php">
                    <div class="card">
                        <div class="box">
                            <h1>
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "tms");
                                    if (!$conn) die("Connection failed: " . mysqli_connect_error());
                                    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM user");
                                    echo mysqli_fetch_assoc($result)['count'];
                                    mysqli_close($conn);
                                ?>
                            </h1>
                            <h3>User</h3>
                        </div>
                        <div class="icon-case"><img src="img/user1.png" style="height:70px; width:70px" alt=""></div>
                    </div>
                </a>

                <!-- Traffic Card -->
                <a href="traffic2.php">
                    <div class="card">
                        <div class="box">
                            <h1>
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "tms");
                                    if (!$conn) die("Connection failed: " . mysqli_connect_error());
                                    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM traffic");
                                    echo mysqli_fetch_assoc($result)['count'];
                                    mysqli_close($conn);
                                ?>
                            </h1>
                            <h3>Traffic</h3>
                        </div>
                        <div class="icon-case"><img src="img/traffic1.png" style="height:90px; width:90px" alt=""></div>
                    </div>
                </a>

                <!-- E-chit Card -->
                <a href="echit.php">
                    <div class="card">
                        <div class="box">
                            <h1>
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "tms");
                                    if (!$conn) die("Connection failed: " . mysqli_connect_error());
                                    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM echit");
                                    echo mysqli_fetch_assoc($result)['count'];
                                    mysqli_close($conn);
                                ?>
                            </h1>
                            <h3>E-chit</h3>
                        </div>
                        <div class="icon-case"><img src="img/table2.png" style="height:70px; width:70px" alt=""></div>
                    </div>
                </a>

                <!-- Payment Card -->
                <a href="payment-details.php">
                    <div class="card">
                        <div class="box">
                            <h1>
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "tms");
                                    if (!$conn) die("Connection failed: " . mysqli_connect_error());
                                    
                                    // Update this to check for both 'paid' and 'completed' (case-insensitive)
                                    $sql = "SELECT COUNT(*) as count FROM echit WHERE LOWER(payment_status) IN ('paid', 'completed')";
                                    $result = mysqli_query($conn, $sql);
                                    echo mysqli_fetch_assoc($result)['count'];
                                    
                                    mysqli_close($conn);
                                ?>
                            </h1>
                            <h3>Payment Details</h3>
                        </div>
                        <div class="icon-case"><img src="payment.jpeg" style="height:70px; width:70px" alt=""></div>
                    </div>
                </a>
                

            </div>
        </div>
    </div>
</body>
</html>