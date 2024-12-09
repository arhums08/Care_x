<?php
session_start();
include('includes/config.php');

if(isset($_POST['login']))
{
    $uname = $_POST['username'];
    $Password = md5($_POST['inputpwd']);
    $query = mysqli_query($con, "SELECT ID FROM tbladmin WHERE AdminuserName='$uname' AND Password='$Password'");
    $ret = mysqli_fetch_array($query);
    if($ret > 0){
        $_SESSION['aid'] = $ret['ID'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";          
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="hos.png" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login | Covid 19 Testing Management System</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for Modern Design -->
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: url('back.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .login-container input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .login-container input[type="submit"] {
            background-color: #0072ff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #005bb5;
        }

        .login-container .forgot-password,
        .login-container .home-link {
            font-size: 14px;
            margin-top: 10px;
            color: #0072ff;
            text-decoration: none;
        }

        .login-container .forgot-password:hover,
        .login-container .home-link:hover {
            text-decoration: underline;
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-login a {
            background-color: #fff;
            color: #0072ff;
            font-size: 20px;
            border-radius: 50%;
            padding: 10px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .social-login a:hover {
            background-color: #0072ff;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Admin Login</h1>

        <!-- Login Form -->
        <form name="login" method="post">
            <input type="text" name="username" id="username" placeholder="Enter username" required>
            <input type="password" name="inputpwd" id="inputpwd" placeholder="Enter password" required>
            <input type="submit" name="login" value="Login">
        </form>

        <!-- Links for Forgot Password and Home -->
        <div>
            <a href="password-recovery.php" class="forgot-password">Forgot Password?</a>
            <br>
            <a href="index.php" class="home-link"><i class="fa fa-home"></i> Home Page</a>
        </div>

        <!-- Social Login Icons (Optional) -->
        <div class="social-login">
            <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://en.wikipedia.org/wiki/Twitter" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

</body>

</html>
