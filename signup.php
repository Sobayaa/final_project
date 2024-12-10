<?php
include 'db_connection.php'; // เรียกใช้ไฟล์เชื่อมต่อฐานข้อมูล

$registration_message = ''; // กำหนดค่าเริ่มต้นให้ตัวแปร

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ตรวจสอบว่า username หรือ email มีอยู่ในระบบหรือไม่
    $check_sql = "SELECT username, email FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_sql);

    if (!$check_stmt) {
        die("Error in SQL: " . $conn->error);
    }

    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // หากพบ username หรือ email ซ้ำ
        $check_stmt->bind_result($existing_username, $existing_email);
        $check_stmt->fetch();

        if ($existing_username === $username) {
            $registration_message = "This username is already registered. Please choose a different username.";
        } elseif ($existing_email === $email) {
            $registration_message = "This email is already registered. Please use a different email.";
        }
    } else {
        // หากไม่มี username และ email ในระบบ ทำการสมัครสมาชิก
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error in SQL: " . $conn->error);
        }

        $stmt->bind_param("sss", $username, $email, $password_hashed);

        if ($stmt->execute()) {
            $registration_message = "Registration successful!";
        } else {
            $registration_message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $check_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            width: 50px;
            height: 50px;
        }
        .header h1 {
            font-size: 24px;
            color: #007bff;
            margin-top: 10px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
        }
        .alert {
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="tooth.webp" alt="Logo" >
        <h1>Salapao Dental Clinic</h1>
    </div>
    
    <!-- แสดงข้อความ Registration successful! หรือข้อผิดพลาด -->
    <?php if ($registration_message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $registration_message; ?>
        </div>
    <?php endif; ?>

    <h2 class="text-center">Sign Up</h2>
    
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <p class="mt-3">Already have an account? <a href="signin.php">Sign In</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
