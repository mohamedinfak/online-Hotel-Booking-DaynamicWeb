
<?php

include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking - Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: black;
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

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Register Your Account</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login here!!</a></p>
        </div>
    </div>
</body>
</html>
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['confirm_password'];
  

    if ($password== $password2) {

            $query = "INSERT INTO register VALUES('$fullname','$email', '$password')";
            
            $result = mysqli_query($conn, $query);

            if ($result) {
                
                header('Location:login.php');
                exit();
            } else {
                echo 'Error: Unable to register. Please try again.';
            }

       } else {
        
                echo 'Passwords do not match. Please check.';
         }
}
mysqli_close($conn);  

?>

