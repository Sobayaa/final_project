<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Salapao Dental Clinic - Contact Information">
    <meta name="author" content="Salapao Dental Clinic">
    <title>Contact Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dceeff;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 36px;
            color: #2c3e50;
            font-weight: 700;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
            background: #f9fafb;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        .contact-info div {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 18px;
            color: #34495e;
            transition: transform 0.2s;
        }
        .contact-info div:hover {
            transform: scale(1.01);
        }
        .contact-info div i {
            font-size: 30px;
            color: #3366cc;
            transition: color 0.2s;
        }
        .contact-info div:hover i {
            color: #007bff;
        }
        .map-container {
            margin-top: 30px;
            border-radius: 12px;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: none;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 30px;
        }
        .navbar-custom {
            background-color: #3366cc;
            padding: 10px 20px; /* เพิ่ม padding สำหรับ navbar */
        }
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
        .navbar-custom .navbar-brand {
            color: white;
        }
        .navbar-custom .navbar-brand:hover {
            color: #f8f9fa;
        }

        @media (min-width: 576px) {
        .header h1 {
            font-size: 32px; /* ขนาดฟอนต์ใหญ่ขึ้นสำหรับหน้าจอขนาดใหญ่ */
        }

        .contact-info {
            gap: 20px;
        }

        .contact-info div {
            font-size: 18px; /* ขนาดฟอนต์ใหญ่ขึ้นสำหรับหน้าจอขนาดใหญ่ */
        }

        .contact-info div i {
            font-size: 30px; /* ขนาดไอคอนใหญ่ขึ้นสำหรับหน้าจอขนาดใหญ่ */
        }
    }

    /* Media Queries สำหรับอุปกรณ์ขนาดกลาง (เช่น tablet) */
    @media (min-width: 768px) {
        .container {
            padding: 40px;
        }
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid"> <!-- ใช้ container-fluid แทน container -->
            <a class="navbar-brand" href="index.php"><img src="tooth.webp" style="height: 40px;"> SALAPAO Dental Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="header">
            <h1>Contact Information</h1>
        </div>
        <div class="contact-info">
            <div>
                <a href="https://web.facebook.com/swudenthospital/?_rdc=1&_rdr" target="_blank">
                    <i class="fab fa-facebook"></i>
                    <span>SalapaoDentalClinic.Official</span>
                </a>
            </div>
            <div>
                <a href="https://lin.ee/WNvUjlc" target="_blank">
                    <i class="fab fa-line"></i>
                    <span>SalapaoDentalClinic.Official</span>
                </a>
            </div>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span>012-345-6789</span>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>Salapao Dental Clinic, 114 Sukhumvit 23, Wattana District, Bangkok 10110, Thailand</span>
            </div>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.309160385363!2d100.561885!3d13.736717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c4c7d8b6a93%3A0x4b5b7e8d4a7c5c8e!2sSalapao%20Dental%20Clinic!5e0!3m2!1sen!2sth!4v1630457472320" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="footer">
            <p>&copy; 2024 Salapao Dental Clinic. All rights reserved.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
