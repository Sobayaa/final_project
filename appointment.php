<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // ถ้าไม่ได้เข้าสู่ระบบ ให้ redirect ไปยังหน้า signin.php
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .appointment-form {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        .navbar-custom {
            background-color: #3366cc;
        }
        .btn-time {
            border: 1px solid #007bff;
            color: #007bff;
            margin: 2px;
            width: 80px;
            text-align: center;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-time.active {
            background-color: #007bff;
            color: #fff;
        }
        .btn-time:hover {
            background-color: #007bff;
            color: #fff;
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
        
        .form-check-input {
            appearance: none;
            width: 20px;
            height: 20px;
            background: #f8f9fa;
            border: 2px solid #007bff;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .form-check-input:checked {
            background-color: #007bff;
            border-color: #0056b3;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .form-check-label {
            margin-left: 10px;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .btn-time {
                width: 100%; /* ปุ่มจะเต็มความกว้างหน้าจอ */
            }
            .navbar-custom .navbar-brand img {
                height: 30px; /* ลดขนาดโลโก้ */
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

    <div class="container mt-5">
        <h2 class="text-center">Appointment Request Form</h2>
        <p class="text-center">Please provide all required information to make an appointment</p>
        
        <form class="appointment-form" method="post" action="submit_appointment.php" onsubmit="return validateForm()">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">What date and time are best for you?</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap">
                            <div class="btn-time" onclick="selectTime(this)">08:00</div>
                            <div class="btn-time" onclick="selectTime(this)">09:00</div>
                            <div class="btn-time" onclick="selectTime(this)">10:00</div>
                            <div class="btn-time" onclick="selectTime(this)">11:00</div>
                            <div class="btn-time" onclick="selectTime(this)">13:00</div>
                            <div class="btn-time" onclick="selectTime(this)">14:00</div>
                            <div class="btn-time" onclick="selectTime(this)">15:00</div>
                            <div class="btn-time" onclick="selectTime(this)">16:00</div>
                            <div class="btn-time" onclick="selectTime(this)">17:00</div>
                        </div>
                        <input type="hidden" id="appointment_time" name="appointment_time" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">What service are you interested in?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="orthodontics" name="services[]" value="Orthodontics">
                    <label class="form-check-label" for="orthodontics">Orthodontics</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="xray" name="services[]" value="X-ray">
                    <label class="form-check-label" for="xray">X-ray</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="retainer" name="services[]" value="Retainer">
                    <label class="form-check-label" for="retainer">Retainer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="denture" name="services[]" value="Denture">
                    <label class="form-check-label" for="denture">Denture</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cleaning" name="services[]" value="Cleaning">
                    <label class="form-check-label" for="cleaning">Cleaning</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="pull-tooth" name="services[]" value="Pull a tooth">
                    <label class="form-check-label" for="pull-tooth">Pull a tooth</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="impaction" name="services[]" value="Tooth Impaction Removal">
                    <label class="form-check-label" for="impaction">Tooth Impaction Removal </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filling" name="services[]" value="Filling">
                    <label class="form-check-label" for="filling">Filling</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="fluoride" name="services[]" value="Fluoride Application">
                    <label class="form-check-label" for="fluoride">Fluoride Application</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="others" name="services[]" value="Others">
                    <label class="form-check-label" for="others">Others</label>
                    <input type="text" id="others-text" class="form-control" name="otherService" placeholder="Please specify" style="display: none;">
                </div>
            <div class="mb-3">
                <label for="additional_info" class="form-label">Provide additional information</label>
                <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>

        function validateForm() {
            const firstName = document.getElementById('first_name').value.trim();
            const lastName = document.getElementById('last_name').value.trim();
            const contactNumber = document.getElementById('contact_number').value.trim();
            const email = document.getElementById('email').value.trim();
            const appointmentDate = document.getElementById('appointment_date').value.trim();
            const appointmentTime = document.getElementById('appointment_time').value.trim();
            const services = document.querySelectorAll('input[name="services[]"]:checked');

            if (!firstName || !lastName || !contactNumber || !email || !appointmentDate || !appointmentTime) {
                alert('Please fill in all required fields.');
                return false;
            }

            if (services.length === 0) {
                alert('Please select at least one service.');
                return false;
            }

            return true; // ส่งฟอร์มได้
        }
        
        function selectTime(button) {
            // ลบคลาส 'active' จากปุ่มทั้งหมด
            const buttons = document.querySelectorAll('.btn-time');
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });

            // เพิ่มคลาส 'active' ให้กับปุ่มที่ถูกเลือก
            button.classList.add('active');

            // กำหนดค่าของเวลาที่เลือกลงใน input hidden
            document.getElementById('appointment_time').value = button.textContent;
        }

        // JavaScript สำหรับจัดการ "Others"
        document.addEventListener("DOMContentLoaded", function () {
            const othersCheckbox = document.getElementById('others');
            const othersText = document.getElementById('others-text');

            othersCheckbox.addEventListener('change', function () {
                if (othersCheckbox.checked) {
                    othersText.style.display = 'block'; // แสดง textbox
                } else {
                    othersText.style.display = 'none'; // ซ่อน textbox
                    othersText.value = ''; // ลบข้อความใน textbox เมื่อยกเลิกการเลือก
                }
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>