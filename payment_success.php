<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="refresh" content="5;url=price.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payment Successful</title>
    <style>
        body {
            background: linear-gradient(135deg, #800000, black, #800000);
            color: white;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }
        .message-box {
            background-color: #222;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px #ff0000;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            margin-bottom: 20px;
            color: #ff0000;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        a {
            color: #ff0000;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Payment Successful!</h1>
        <p>Thank you for your payment. Your transaction has been completed successfully.</p>
        <p>You will be redirected to the packages page shortly.</p>
        <p>If you are not redirected automatically, <a href="price.php">click here</a>.</p>
    </div>
</body>
</html>
