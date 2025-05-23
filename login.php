<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>GFC - Login</title>
    <link rel="stylesheet" href="regform.css" />
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
</head>
<body>
    <a href="index.php" class="exit-btn" title="Exit">&times;</a>

    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "db.php";

            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = $user;  // THIS MUST be the full user array
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
            $stmt->close();
            $conn->close();
        }
        ?>
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-field">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <button type="submit" name="submit">Login</button>
        </form>

        <p class="login-link">
            Don't have an account? <a href="register.php">Register</a>
        </p>
    </div>
</body>
</html>
