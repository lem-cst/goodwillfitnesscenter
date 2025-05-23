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

try {
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize inputs
        $fullname = trim($_POST['fullname']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $address = trim($_POST['address']);
        $payment_method = $_POST['payment'];
        $user_id = $_SESSION['user']['id'];

        // Basic validation
        if (empty($fullname) || empty($email) || empty($address) || empty($payment_method)) {
            throw new Exception("Please fill in all required fields.");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address.");
        }

        // Allow only specific payment methods
        $allowed_methods = ['gcash', 'paymaya', 'paypal'];
        if (!in_array($payment_method, $allowed_methods)) {
            throw new Exception("Invalid payment method.");
        }

        // File upload handling and validation
        $file_path = null;
        if (isset($_FILES['payment_proof']) && $_FILES['payment_proof']['error'] !== UPLOAD_ERR_NO_FILE) {
            if ($_FILES['payment_proof']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception("File upload error. Please try again.");
            }

            $file_tmp = $_FILES['payment_proof']['tmp_name'];
            $file_name = basename($_FILES['payment_proof']['name']);
            $file_size = $_FILES['payment_proof']['size'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            // Validate file type (allow images only)
            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
            if (!in_array($file_ext, $allowed_extensions)) {
                throw new Exception("Invalid file type. Only JPG, PNG, GIF, BMP files are allowed.");
            }

            // Validate file size (max 5MB)
            if ($file_size > 5 * 1024 * 1024) {
                throw new Exception("File size exceeds 5MB limit.");
            }

            $upload_dir = __DIR__ . '/uploads/payments/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Generate a unique file name to avoid conflicts
            $new_file_name = uniqid('payment_', true) . '.' . $file_ext;
            $file_path = 'uploads/payments/' . $new_file_name;

            if (!move_uploaded_file($file_tmp, $upload_dir . $new_file_name)) {
                throw new Exception("Error uploading file.");
            }
        }

        // Prepare and execute insert statement
        $stmt = $conn->prepare("INSERT INTO payments (user_id, fullname, email, address, payment_method, payment_proof) VALUES (?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $conn->error);
        }

        $stmt->bind_param("isssss", $user_id, $fullname, $email, $address, $payment_method, $file_path);
        $stmt->execute();
        $stmt->close();

        header("Location: payment_success.php");
        exit();
    }
} catch (Exception $e) {
    $error = $e->getMessage();
} finally {
    if (isset($conn)) {
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GFC - Payment</title>
    <style>
        /* Your existing CSS unchanged */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #800000, black, #800000);
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            display: flex;
            color: #1f1f1f;
            position: relative;
        }

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

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #1f1f1f;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #1f1f1f;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .payment-methods {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .payment-method {
            display: flex;
            align-items: center;
        }

        .payment-method input {
            width: auto;
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color:#800000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: red;
        }

        .ewallet-instructions {
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 4px;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            background: #ffebeb;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;
            border-radius: 4px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }
            
            .payment-methods {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="close-btn" title="Exit">&times;</a>
    
    <div class="container">
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <h1>Payment</h1>
        <form method="post" action="payment.php" enctype="multipart/form-data" novalidate>
            <!-- Personal Information -->
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?></textarea>
            </div>

            <!-- Payment Method -->
            <div class="form-group">
                <label>Payment Method:</label>
                <div class="payment-methods">
                    <?php
                    $methods = ['gcash' => 'GCash', 'paymaya' => 'PayMaya', 'paypal' => 'PayPal'];
                    foreach ($methods as $key => $label) {
                        $checked = (isset($_POST['payment']) && $_POST['payment'] === $key) ? 'checked' : '';
                        echo '<div class="payment-method">';
                        echo '<input type="radio" id="' . $key . '" name="payment" value="' . $key . '" required ' . $checked . '>';
                        echo '<label for="' . $key . '">' . $label . '</label>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Unified E-wallet Instructions and Payment Proof -->
            <div id="instructions" class="ewallet-instructions" style="display:none;">
                <p id="payment-instructions-text"></p>
                <ol id="payment-instructions-steps"></ol>
                <div class="form-group">
                    <label for="payment_proof">Payment Proof:</label>
                    <input type="file" id="payment_proof" name="payment_proof" accept="image/*">
                </div>
            </div>

            <button type="submit">Complete Payment</button>
        </form>
    </div>

    <script>
        const paymentMethods = document.querySelectorAll('input[name="payment"]');

        const instructions = {
            gcash: {
                text: "GCash Payment Instructions:",
                steps: [
                    "Open your GCash app",
                    "Go to 'Send Money'",
                    "Enter our GCash number: 0917-881-5828",
                    "Enter the payment amount",
                    "Upload screenshot of transaction below"
                ]
            },
            paymaya: {
                text: "PayMaya Payment Instructions:",
                steps: [
                    "Open your PayMaya app",
                    "Go to 'Send Money'",
                    "Enter our PayMaya number: 0917-881-5828",
                    "Enter the payment amount",
                    "Upload screenshot of transaction below"
                ]
            },
            paypal: {
                text: "PayPal Payment Instructions:",
                steps: [
                    "Click the PayPal button below",
                    "Log in to your PayPal account",
                    "Confirm payment amount",
                    "Complete the transaction"
                ]
            }
        };

        function showInstructions(method) {
            const container = document.getElementById("instructions");
            if (instructions[method]) {
                container.style.display = 'block';
                document.getElementById("payment-instructions-text").textContent = instructions[method].text;
                const ol = document.getElementById("payment-instructions-steps");
                ol.innerHTML = '';
                instructions[method].steps.forEach(step => {
                    const li = document.createElement('li');
                    li.textContent = step;
                    ol.appendChild(li);
                });
            } else {
                container.style.display = 'none';
            }
        }

        paymentMethods.forEach(input => {
            input.addEventListener('change', (e) => {
                showInstructions(e.target.value);
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const checkedMethod = document.querySelector('input[name="payment"]:checked');
            if (checkedMethod) {
                showInstructions(checkedMethod.value);
            }
        });
    </script>
</body>
</html>
