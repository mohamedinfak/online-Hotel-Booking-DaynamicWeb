
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['email'])){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking Feedback</title>
    <link rel="stylesheet" href="styles.css">
    <img src="h1.jpg" alt="h1 Image" style="width: 100%; max-width: 100%; height: auto;">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: ;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            margin-left:35%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            display: none;
        }

        label.star {
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        input[type="radio"]:checked + label.star:before {
            content: '\2605'; /* Unicode character for a filled star */
            color: #f90;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
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
        .section-2{
            width:100%;
            height: 20%;

        }
        .section-1{
            width:100%;
            height: 30%;

        }
        .spn{
            color:green;
            font-size:20px;
        }
    </style>
</head>
<body><section class="section-1"><nav>
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
        </div>
    </section>
    <section class="section-2"><div class="container">
        <h2>Hotel Room Booking Feedback</h2>
        <form action="#" method="post">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>

            <label>Rating:</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="star">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="star">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="star">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="star">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="star">&#9733;</label>
            </div>

            

    <button type="submit">Submit Feedback</button>
</form>

        </form>
    </div></section>
    
</body>
</html>
<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $feedbackText =  $_POST['feedback'];
    $rating = (int)$_POST['rating'];

    if (empty($feedbackText) || $rating < 1 || $rating > 5) {
        echo 'Invalid input. Please provide feedback and select a valid rating.';
        exit();
    }


    $insertQuery = "INSERT INTO feedback VALUES ('$feedbackText', $rating)";
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        echo 'Feedback submitted successfully!';
    } else {
        echo 'Error submitting feedback. Please try again.';
    }

    mysqli_close($conn);
} else {
    echo 'Invalid request method.';
}

?>
   




