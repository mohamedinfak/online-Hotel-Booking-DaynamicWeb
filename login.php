<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking Login</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color:black;
            color:white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: white;
        }

        form {
            margin-top: 20px;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        button {
            background-color: #3caf80;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Hotel Room Booking Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Login</button>
        </form>
        <a href="account ragister.php"> <BR><center></BR> Register Your account?</center></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    
        $sql_query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result == false) {
            echo 'The query failed.';
            exit();
        }
    
       
        if (mysqli_num_rows($result) == 1) {
          echo"connect";
          
            $_SESSION['email'] = $email; 
            header('Location: home.php');
            exit();
        } else {
            header('Location: login.php');
        }
    
       
    }
    mysqli_close($conn);
    ?>
    