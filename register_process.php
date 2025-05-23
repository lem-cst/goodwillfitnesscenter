<?php
require_once "db.php";

if (isset($_POST["submit"])) {
    $firstName = trim($_POST["FirstName"]);
    $lastName = trim($_POST["LastName"]);
    $email = trim($_POST["Email"]);
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeat_password"];

    // Validation
    $errors = [];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($repeatPassword)) {
        $errors[] = "All fields are required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if ($password !== $repeatPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Check for existing email
    $checkEmail = mysqli_prepare($conn, "SELECT id FROM users WHERE email = ?");
    mysqli_stmt_bind_param($checkEmail, "s", $email);
    mysqli_stmt_execute($checkEmail);
    mysqli_stmt_store_result($checkEmail);
    if (mysqli_stmt_num_rows($checkEmail) > 0) {
        $errors[] = "Email already exists.";
    }
    mysqli_stmt_close($checkEmail);

    // If errors, redirect back
    if (!empty($errors)) {
        $errorMsg = urlencode(implode("<br>", $errors));
        header("Location: register.php?error=$errorMsg");
        exit();
    }

    // Insert new user
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insert = mysqli_prepare($conn, "INSERT INTO users (First_Name, Last_Name, email, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($insert, "ssss", $firstName, $lastName, $email, $hashedPassword);
    mysqli_stmt_execute($insert);
    mysqli_stmt_close($insert);
    mysqli_close($conn);

    header("Location: register.php?success=1");
    exit();
} else {
    header("Location: register.php");
    exit();
}
