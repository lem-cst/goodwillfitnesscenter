<?php
// admin_panel.php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// DB credentials
$user_db = new mysqli("localhost", "root", "", "user_registration");
$gym_db = new mysqli("localhost", "root", "", "gym_db");

if ($user_db->connect_error || $gym_db->connect_error) {
    die("Connection failed: " . $user_db->connect_error . $gym_db->connect_error);
}

$users_result = $user_db->query("SELECT * FROM users");
$payments_result = $gym_db->query("SELECT * FROM payments");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img-thumb {
            width: 100px;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Admin Panel</span>
        <a href="logout.php" class="btn btn-outline-light">Logout</a>
    </div>
</nav>
<div class="container py-4">
    <h2 class="mb-4">Registered Users</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $users_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars(($user['First_Name'] ?? '') . ' ' . ($user['Last_Name'] ?? '')) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <h2 class="mt-5 mb-4">Payments</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Payment Method</th>
                    <th>Proof</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($payment = $payments_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($payment['id']) ?></td>
                        <td><?= htmlspecialchars($payment['user_id']) ?></td>
                        <td><?= htmlspecialchars($payment['fullname']) ?></td>
                        <td><?= htmlspecialchars($payment['email']) ?></td>
                        <td><?= htmlspecialchars($payment['address']) ?></td>
                        <td><?= htmlspecialchars($payment['payment_method']) ?></td>
                        <td>
                            <?php if ($payment['payment_proof']): ?>
                                <a href="<?= htmlspecialchars($payment['payment_proof']) ?>" target="_blank">
                                    <img src="<?= htmlspecialchars($payment['payment_proof']) ?>" class="img-thumb">
                                </a>
                            <?php else: ?>
                                No Image
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html> 