<?php
    session_start();
    if (isset($_SESSION["user"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GFC - Register</title>
    <link rel="stylesheet" href="regform.css">
</head>
<style>
    .exit-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 50px;
        }
        .exit-btn:hover {
            color: #ff0000;
        }
</style>
<body>
    <a href="index.php" class="exit-btn" title="Exit">&times;</a>
    <div class="container">
        <h2>Register</h2>

        <?php
        // Show error messages via GET
        if (isset($_GET["error"])) {
            echo "<div class='alert alert-danger'>{$_GET["error"]}</div>";
        }
        if (isset($_GET["success"])) {
            echo "<div class='alert alert-success'>You are registered successfully!</div>";
        }
        ?>

        <form action="register_process.php" method="post">
            <div class="input-field">
                <input type="text" name="FirstName" placeholder="First Name" >
            </div>
            <div class="input-field">
                <input type="text" name="LastName" placeholder="Last Name" >
            </div>
            <div class="input-field">
                <input type="email" name="Email" placeholder="Email" >
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Password" >
            </div>
            <div class="input-field">
                <input type="password" name="repeat_password" placeholder="Confirm Password" >
            </div>
            <button type="submit" name="submit">Register</button>
        </form>

        <p class="login-link">Already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>
