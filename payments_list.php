<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$host = "localhost";
$username = "root";
$password = "";
$database = "gym_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user']['id'];

// Get all payment proofs of this user
$sql = "SELECT id, payment_proof, payment_method, fullname, created_at FROM payments WHERE user_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$payments = [];
while ($row = $result->fetch_assoc()) {
    $payments[] = $row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Your Payment Proofs</title>
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 900px;
        margin: 20px auto;
        padding: 0 20px;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .payment-item {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .payment-info {
        flex-grow: 1;
    }
    .payment-proof img {
        max-width: 150px;
        max-height: 150px;
        border-radius: 4px;
        object-fit: contain;
        border: 1px solid #ccc;
    }
    .no-image {
        color: #999;
        font-style: italic;
    }
</style>
</head>
<body>

<h1>Your Payment Proofs</h1>

<?php if (empty($payments)): ?>
    <p>You have no payment proofs uploaded yet.</p>
<?php else: ?>
    <?php foreach ($payments as $payment): ?>
        <div class="payment-item">
            <div class="payment-info">
                <strong>Name:</strong> <?php echo htmlspecialchars($payment['fullname']); ?><br>
                <strong>Payment Method:</strong> <?php echo htmlspecialchars(ucfirst($payment['payment_method'])); ?><br>
                <strong>Date:</strong> <?php echo htmlspecialchars($payment['created_at']); ?><br>
            </div>
            <div class="payment-proof">
                <?php if (!empty($payment['payment_proof']) && file_exists($payment['payment_proof'])): ?>
                    <a href="<?php echo htmlspecialchars($payment['payment_proof']); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo htmlspecialchars($payment['payment_proof']); ?>" alt="Payment Proof">
                    </a>
                <?php else: ?>
                    <div class="no-image">No image available</div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
