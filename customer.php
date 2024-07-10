
<?php

include ('config.php');

session_start();

if(!isset($_SESSION['email'])){
   header('location:login.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Images Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .image-container {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover {
            transform: scale(1.05);
        }

        .customer-image {
            width: 100%;
            height: auto;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 15px 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-item {
            margin-right: 15px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #f8f9fa;
        }.spn{
            color:green;
            font-size:20px;
        }
    </style>
</head>
<body>
    <header><nav>
        <div class="navbar"><span class="spn"><?php
            echo $_SESSION['email'];
            ?><br></span>
            <a class="navbar-brand" href="#">Hotel Room Booking System</a>
            <ul class="nav-links">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div></header><section>  <div class="container">
        <h2>Customer Images</h2>
        <div class="image-grid">
            <div class="image-container">
                <img class="cus1-image" src="cus1.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
                <img class="cus2" src="cus2.jpg" alt="Customer 2">
            </div>
            <div class="image-container">
            <img class="cus3-image" src="cus3.jpg" alt="Customer 2" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus4-image" src="cus4.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus5-image" src="cus5.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus6-image" src="cus6.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus7-image" src="cus7.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus8-image" src="cus8.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus9-image" src="cus9.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <div class="image-container">
            <img class="cus10-image" src="cus10.jpg" alt="Customer 1" style="width:273px; height: 183px;;">
            </div>
            <!-- Add more image containers as needed -->
        </div>
    </div></section>
    
</body>
</html>
