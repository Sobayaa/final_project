<?php
session_start(); // เริ่มต้น session

// ตรวจสอบว่าผู้ใช้ล็อกอินแล้วหรือยัง
$isLoggedIn = isset($_SESSION['user_id']) ? true : false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Salapao Dental Clinic</h1>
        <p>Welcome to Our Clinic!</p>
        <div class="button-group">
            <a href="services.php"><button class="btn btn-primary">Our Services</button></a>
            <a href="appointment.php"><button class="btn btn-secondary">Book Appointment</button></a>
            <a href="contact.php"><button class="btn btn-info">Contact Us</button></a>
        </div>
        <div class="auth-buttons">   
            <?php if ($isLoggedIn): ?>
                <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
            <?php else: ?>
                <a href="signin.php"><button class="btn btn-primary">Sign In</button></a>
            <?php endif; ?>
        </div>
    </header>

    <section class="featured-services">
        <h2>Featured Services</h2>
            <div class="services-container">
                <div class="service-card">
                    <p>Teeth Whitening</p>
                    <p>Starting from $99</p>
                </div>
                <div class="service-card">
                    <p>Dental Implants</p>
                    <p>Contact for Details</p>
                </div>
        </div>
    </section>

    <section class="customer-reviews">
        <div class="container">
            <h2 class="section-title">Customer Reviews</h2>
            <p class="section-subtitle">Hear what our happy patients have to say!</p>
            <div class="reviews-container">
                <div class="review-card">
                    <p class="review-text">"Amazing service! My teeth look fantastic now."</p>
                    <div class="review-author">
                        <img src="review1.jpg" alt="Kristoff">
                        <p class="reviewer-name">- Kristoff</p>
                    </div>
                </div>
                <div class="review-card">
                    <p class="review-text">"The staff was so kind and professional. Highly recommend!"</p>
                    <div class="review-author">
                        <img src="review2.png" alt="Aladdin">
                        <p class="reviewer-name">- Aladdin</p>
                    </div>
                </div>
                <div class="review-card">
                    <p class="review-text">"Dr. Smith is the best dentist I've ever had. Thank you!"</p>
                    <div class="review-author">
                        <img src="review3.webp" alt="Eric">
                        <p class="reviewer-name">- Eric</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-team">
        <h2>Our Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="doctor.jpg" alt="Dr. Panitta">
                <h3>Dr. Panitta</h3>
            </div>
            <div class="team-member">
                <img src="doctor.jpg" alt="Dr. Natnicha">
                <h3>Dr. Natnicha</h3>
            </div>
        </div>
        <div class="team-buttons">
            <a href="team.php"><button>Meet Our Team</button></a>
        </div>
    </section>

    <footer class="footer">
        <a href="index.php"><button>Home</button></a>
        <a href="contact.php"><button>Contact</button></a>
        <a href="about.php"><button>About Us</button></a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>