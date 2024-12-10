<?php
// รวมไฟล์ของ PHPMailer
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// การตั้งค่าการเชื่อมต่อฐานข้อมูล
$host = 'localhost';
$dbname = 'finalproject';
$username = 'root';
$password = '';

try {
    // สร้างการเชื่อมต่อ
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ตรวจสอบค่าที่ส่งมาจากฟอร์ม
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // รับค่าจากฟอร์ม
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';
        $contact_number = $_POST['contact_number'] ?? '';
        $email = $_POST['email'] ?? '';
        $appointment_date = $_POST['appointment_date'] ?? '';
        $appointment_time = $_POST['appointment_time'] ?? '';
        $services = $_POST['services'] ?? [];
        $additional_info = $_POST['additional_info'] ?? '';

        // ตรวจสอบฟิลด์ที่จำเป็น
        if (empty($first_name) || empty($last_name) || empty($email) || empty($appointment_date) || empty($appointment_time)) {
            echo "<script>alert('Please fill in all required fields.'); window.location.href='appointment.php';</script>";
            exit();
        }
        // ตรวจสอบฟอร์แมตอีเมล
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format.'); window.location.href='appointment.php';</script>";
            exit();
        }
        // ตรวจสอบฟอร์แมตเบอร์โทรศัพท์ (10 หลัก)
        if (!preg_match('/^[0-9]{10}$/', $contact_number)) {
            echo "<script>alert('Invalid phone number. Please enter a 10-digit number.'); window.location.href='appointment.php';</script>";
            exit();
        }

        // จัดการบริการ
        if (in_array('Others', $services)) {
            $other_service = $_POST['otherService'] ?? '';
            $service = implode(', ', $services) . " (Other: $other_service)";
        } else {
            $service = implode(', ', $services);
        }

        // ตรวจสอบเวลานัดซ้ำ
        $sql_check = "SELECT COUNT(*) FROM appointments WHERE appointment_date = :appointment_date AND appointment_time = :appointment_time";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([
            ':appointment_date' => $appointment_date,
            ':appointment_time' => $appointment_time,
        ]);

        $existing_appointments_count = $stmt_check->fetchColumn();

        if ($existing_appointments_count > 0) {
            // ถ้ามีการจองในวันที่และเวลาเดียวกัน ให้ตรวจสอบบริการ
            $sql_check_service = "SELECT COUNT(*) FROM appointments WHERE appointment_date = :appointment_date AND appointment_time = :appointment_time AND service = :service";
            $stmt_check_service = $conn->prepare($sql_check_service);
            $stmt_check_service->execute([
                ':appointment_date' => $appointment_date,
                ':appointment_time' => $appointment_time,
                ':service' => $service,
            ]);

            if ($stmt_check_service->fetchColumn() > 0) {
                // ถ้ามีการจองซ้ำทั้งวัน, เวลา, และบริการ แจ้งเตือน
                echo "<script>alert('The selected date, time, and service is already taken. Please choose another time or service.'); window.location.href='appointment.php';</script>";
                exit();
            }
        }

        // บันทึกข้อมูลลงฐานข้อมูล
        $sql = "INSERT INTO appointments (first_name, last_name, contact_number, email, appointment_date, appointment_time, service, additional_info)
                VALUES (:first_name, :last_name, :contact_number, :email, :appointment_date, :appointment_time, :service, :additional_info)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':contact_number' => $contact_number,
            ':email' => $email,
            ':appointment_date' => $appointment_date,
            ':appointment_time' => $appointment_time,
            ':service' => $service,
            ':additional_info' => $additional_info,
        ]);


        // ตั้งค่า SMTP สำหรับการส่งอีเมล
        $mail = new PHPMailer(true);
        try {
            // ตั้งค่า SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'panitnoey@gmail.com'; // อีเมลของคุณ
            $mail->Password = 'xtqa zdyf lrow tjxy';  // รหัสผ่านแอปที่สร้าง
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;


            // ตั้งค่าผู้ส่งและผู้รับ
            $mail->setFrom('panitnoey@gmail.com', 'Salapao Dental Clinic');
            $mail->addAddress($email, "$first_name $last_name");  // ผู้รับอีเมล
            $mail->Subject = 'Appointment Confirmation';
            $mail->Body    = "Dear $first_name $last_name,\n\nYour appointment has been scheduled successfully on $appointment_date at $appointment_time.\n\nService: $service\n\nThank you!";

            // ส่งอีเมล
            $mail->send();
            echo "<script>alert('Appointment successfully saved! An email confirmation has been sent.'); window.location.href='appointment.php';</script>";
        } catch (Exception $e) {
            // บันทึกข้อผิดพลาดการส่งอีเมล
            error_log("Mail Error: " . $mail->ErrorInfo, 3, 'errors.log');
            echo "<script>alert('Appointment saved, but email notification failed. Please try again later.'); window.location.href='appointment.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid request.'); window.location.href='appointment.php';</script>";
    }
} catch (PDOException $e) {
    // บันทึกข้อผิดพลาดลง Log และแจ้งผู้ใช้
    error_log("Database Error: " . $e->getMessage(), 3, 'errors.log');
    echo "<script>alert('An unexpected error occurred. Please try again later.'); window.location.href='appointment.php';</script>";
} catch (Exception $e) {
    // ข้อผิดพลาดทั่วไป
    error_log("General Error: " . $e->getMessage(), 3, 'errors.log');
    echo "<script>alert('An unexpected error occurred. Please try again later.'); window.location.href='appointment.php';</script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn = null;
?> 