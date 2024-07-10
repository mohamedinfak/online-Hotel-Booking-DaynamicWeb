<?php

@include ('config.php');

session_start();
if(!isset($_SESSION['email'])){
   header('Location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking Registration</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
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
        }
        .spn{
            color:green;
            font-size:20px;
        }
    </style>
</head>
<body>
    <header><nav>
        <div class="navbar">
            <span class="spn"><?php
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
                    <a class="nav-link" href="login.php">logout</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </header>
    <section> <div class="container">
        <h2>Hotel Room Booking Registration</h2>
        <form action="" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required>

            <button type="submit">Register</button>
        </form>
    </div></section>
   
</body>
</html>
<?php


    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

   

    $query = "INSERT INTO roombooking VALUES ('$fullname', '$email','$phone','$checkin','$checkout')";

    $fi = mysqli_query($conn, $query)  or die(mysqli_error($conn));

    if($fi == false)
        {
        echo 'The query failed.';
        header('Location:home.php');
        exit();
    }
    else{
        echo"success fully registered!!";
    }
        header('Location:home.php');
        
        mysqli_close($conn);
        
    
    


    
  


?>