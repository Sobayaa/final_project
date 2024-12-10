<?php
// กำหนดค่าการเชื่อมต่อฐานข้อมูล
$host = "localhost"; // ชื่อโฮสต์ (ส่วนใหญ่เป็น localhost)
$db_user = "root";   // ชื่อผู้ใช้ฐานข้อมูล
$db_password = "";   // รหัสผ่าน (ใส่ค่าให้ตรงกับที่ตั้งไว้ใน MySQL)
$db_name = "finalproject"; // ชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อกับฐานข้อมูล
$conn = new mysqli($host, $db_user, $db_password, $db_name);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตั้งค่าการเข้ารหัสให้รองรับ UTF-8
$conn->set_charset("utf8");

?>
