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
    <title>Resort Booking System</title>
    <style>
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
        }
        .spn{
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
             
            </ul>
        </div>
    </header>
    <img src="home.jpg" alt="home Image" style="width: 100%; max-width: 100%; height: auto;">
   

</body>
</html>
