<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #3366cc;
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
        /* General Styling for the Team Section */
        .team-section {
            background-color: #fff; /* พื้นหลังของทั้งหน้าเป็นสีขาว */
            padding: 60px 0;
            text-align: center;
        }

        /* Title styling */
        .section-title {
            font-size: 36px;
            color: #333;
            font-weight: bold;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Flexbox layout for the row */
        .row {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* Styling for each team member box */
        .team-member {
            background-color: #f4f9fc; /* พื้นหลังในกรอบเป็นสีเทา */
            border-radius: 15px; /* กรอบมน */
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้กรอบ */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%; /* ใช้ความกว้างเต็มที่ */
            max-width: 600px; /* จำกัดความกว้างที่ 600px */
            height: auto; /* ทำให้ความสูงยืดหยุ่นตามเนื้อหา */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            overflow: hidden; /* ป้องกันข้อความล้นออกจากกรอบ */
        }

        /* Hover effect for the team member */
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Styling for the team member image */
        .team-member-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px; /* ขอบสีฟ้ารอบๆ รูป */
        }

        /* Styling for the name of the team member */
        .team-member h4 {
            font-size: 22px;
            font-weight: 600;
            color: #007BFF;
            margin-bottom: 10px;
        }

        /* Styling for the role/position of the team member */
        .team-member p {
            font-size: 16px;
            color: #555;
            margin-top: 10px;
            line-height: 1.5; /* เพิ่ม line-height เพื่อให้ข้อความอ่านง่ายขึ้น */
            padding: 0 10px; /* เพิ่ม padding ซ้ายขวาเพื่อให้ข้อความไม่ติดขอบ */
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
                align-items: center;
            }
            .team-member {
                width: 90%; /* ลดความกว้างสำหรับหน้าจอเล็ก */
                margin-bottom: 20px;
            }
        }
    

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container">
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
<div class="team-section text-center">
    <h2 class="section-title">Meet Our Team</h2>
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="team-member">
                <img src="doctor.jpg" alt="Dr. Smith" class="team-member-img">
                <h4>Dr. Panitta Jingjit</h4>
                <p>Chief Dentist & Founder</p>
                <p>Service hours: 8 AM to 5 PM, Monday through Friday.</p>
                <p>Dr. Panitta has over 15 years of experience in dentistry. She specializes in general dentistry and orthodontics, ensuring every patient receives exceptional care and attention.</p>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="team-member">
                <img src="doctor.jpg" alt="Dr. Nattaya" class="team-member-img">
                <h4>Dr. Natnicha Sohmalee</h4>
                <p>Dentist & Specialist in Cosmetic Dentistry</p>
                <p>Service hours: 8 AM to 5 PM, Saturday and Sunday.</p>
                <p>With a passion for transforming smiles, Dr. Natnicha focuses on cosmetic procedures, including teeth whitening, veneers, and smile design. Her artistic approach to dentistry ensures beautiful and natural results.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>

