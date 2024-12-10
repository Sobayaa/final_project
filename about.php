<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SALAPAO Dental Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f0f4ff;
    }

    .navbar-custom {
        background-color: #3366cc;
    }
    .navbar-custom .navbar-brand, 
    .navbar-custom .nav-link {
        color: white;
    }
    .navbar-custom .nav-link:hover {
        color: #d6e4ff;
    }

    .section-title {
        font-size: 2rem;
        color: #3366cc;
        margin-bottom: 20px;
    }

    .review-card {
        background-color: white;
        border: 1px solid #d6e4ff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        max-width: 250px;
        margin: 0 auto;
    }

    .review-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        border: 2px solid #3366cc;
    }

    .team-member {
        background-color: white;
        border: 1px solid #d6e4ff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        max-width: 300px;
    }

    .team-member img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        border: 2px ;
    }
    .team-member h4 {
        color: #3366cc;
        margin-top: 10px;
        font-size: 1.25rem;
    }

    .team-member p {
        font-size: 0.9rem;
        color: #555;
    }

    .about-section, .customer-reviews, .team-section {
        padding: 40px 20px;
        background-color: #ffffff;
        border-radius: 12px;
        margin: 20px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .team-section .row {
    gap: 10px; /* ลดระยะห่างระหว่างคอลัมน์ */
    }
    /* Global Styles */
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f9fc;
            color: #333;
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


    <div class="container">
        <div class="about-section text-center">
            <h2 class="section-title">About Us</h2>
            <p>Welcome to SALAPAO Dental Clinic, where we prioritize your oral health with expert care, the latest technology, and a personalized approach. Our clinic was founded with the goal of providing high-quality dental services to our community, with a focus on comfort, affordability, and innovation.</p>

            <p>Since our inception, we have grown to become one of the leading dental care providers in the region. Our team of experienced dentists and specialists are dedicated to ensuring that every patient receives the best care possible. Whether you need routine dental care, cosmetic procedures, or complex treatments, we are here to help you achieve optimal oral health.</p>

            <p>At SALAPAO Dental Clinic, we believe that a healthy smile can transform lives. Our mission is to provide a welcoming and professional environment for patients of all ages, ensuring that each visit is a positive and rewarding experience.</p>
           </div>

        <div class="customer-reviews text-center">
            <h2 class="section-title">Customer Reviews</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-card">
                        <p class="review-text">"Amazing service! My teeth look fantastic now."</p>
                        <div class="review-author">
                            <img src="review1.jpg" alt="Kristoff">
                            <p class="reviewer-name">- Kristoff</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <p class="review-text">"The staff was so kind and professional."</p>
                        <div class="review-author">
                            <img src="review2.png" alt="Aladdin">
                            <p class="reviewer-name">- Aladdin</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <p class="review-text">"Highly recommend! Great experience."</p>
                        <div class="review-author">
                            <img src="review3.webp" alt="Eric">
                            <p class="reviewer-name">- Eric</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-section text-center">
    <h2 class="section-title">Our Team</h2>
    <div class="row justify-content-center">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="team-member" style="width: 250px; height: 190px; text-align: center; padding: 20px;">
                <img src="doctor.jpg" alt="Dr. Panitta Jingjit" class="img-fluid" style="max-height: 150px; object-fit: cover;">
                <h4>Dr. Panitta Jingjit</h4>
                <p>Chief Dentist & Founder</p>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="team-member" style="width: 250px; height: 190px; text-align: center; padding: 20px;">
                <img src="doctor.jpg" alt="Dr. Natnicha Sohmalee" class="img-fluid" style="max-height: 150px; object-fit: cover;">
                <h4>Dr. Natnicha Sohmalee</h4>
                <p>Cosmetic Specialist</p>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

