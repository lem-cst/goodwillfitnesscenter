<!-- admin_login.php -->
<?php
session_start();
$admin_user = 'admin';
$admin_pass = 'password123'; // change this!

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin'] = true;
        header("Location: admin_panel.php");
        exit;
    } else {
        $error = "Invalid login.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 50px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-weight: 500;
        }
        .close-btn:hover {
            color: #ff0000;
        }
        .btn{
            background-color: darkred;
        }
        .btn:hover{
            background-color: red;
        }

</style>
<body class="bg-dark d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <a href="index.php" class="close-btn">&times;</a>
<div class="card p-4 shadow-lg" style="min-width: 300px;">
    <h3 class="mb-3 text-center">Admin Login</h3>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="post">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required />
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required />
        </div>
        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>
</body>
</html>
