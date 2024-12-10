<?php
include 'db_connection.php'; // เรียกใช้ไฟล์เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่ามีการส่งข้อมูล POST เข้ามา
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['identifier']; // ใช้ identifier แทน email
    $password = $_POST['password'];

    // SQL Query
    $sql = "SELECT user_id, username, password FROM users WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($sql);

    // ตรวจสอบว่า prepare() สำเร็จหรือไม่
    if (!$stmt) {
        die("Error in SQL: " . $conn->error);
    }

    // Bind Parameters
    $stmt->bind_param("ss", $identifier, $identifier); // ใช้ identifier สำหรับทั้ง email และ username

    // Execute Statement
    $stmt->execute();

    // รับผลลัพธ์
    $stmt->bind_result($user_id, $username, $hashed_password);
    if ($stmt->fetch()) {
        // ตรวจสอบรหัสผ่านที่ป้อนมา
        if (password_verify($password, $hashed_password)) {
            // เก็บข้อมูลใน Session
            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $username;

            // Redirect ไปยังหน้า index
            header("Location: index.php");
            exit;
        } else {
            $error_message = "Invalid username or password."; // แจ้งผู้ใช้ว่ารหัสผิด
        }
    } else {
        $error_message = "Invalid username or password."; // แจ้งผู้ใช้ว่ารหัสผิด
    }

    // ปิด statement
    $stmt->close();
}

// ปิดการเชื่อมต่อ
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="tooth.webp" alt="Logo">
        <h1>Salapao Dental Clinic</h1>
    </div>
    <h2 class="text-center">Sign In</h2>

    <!-- แสดงข้อความ error หากมี -->
    <?php if (isset($error_message)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="identifier" class="form-label">Username or Email</label>
            <input type="text" class="form-control" id="identifier" name="identifier" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
    <p class="mt-3 text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>