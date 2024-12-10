<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Salapao Dental Clinic offers professional dental services including orthodontics, cleaning, and more at competitive prices.">
    <title>Salapao Dental Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         /* Global Styles */
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f9fc;
            margin: 0;
        }

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

        main {
            padding: 20px;
            text-align: center;
        }

        h2 {
            font-size: 36px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 20px 0;  /* เว้นระยะขอบบนและล่าง */
            
        }

        hr {
            border: 0;
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 20px;
        }

        .service-list li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .service-list li:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .service-list a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        .service-list a:hover {
            color: #0056b3;
        }

        .service-section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-section h3 {
            margin-bottom: 10px;
            color: #0056b3;
            text-align: center;
        }

        .price-table {
            margin: 0 auto;
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .price-table th,
        .price-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .price-table th {
            background-color: #003366;
            color: white;
            font-weight: bold;
        }

        .price-table tr:nth-child(even) {
            background-color: #fafafa;
        }

        .price-table tr:hover {
            background-color: #f1f1f1;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0056b3;
            text-align: center;
            margin-bottom: 10px;
        }



        @media (min-width: 768px) {
            main {
                padding: 10px;
            }
            .service-section {
                padding: 10px;
            }
        }

        @media (min-width: 1024px) {
            .service-list {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        html {
            scroll-behavior: smooth;
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

    <main>
        <h2>Price</h2>
        <hr>
        <ul class="service-list">
            <li><a href="#orthodontics">Orthodontics</a></li>
            <li><a href="#xray">X-ray</a></li>
            <li><a href="#retainer">Retainer</a></li>
            <li><a href="#denture">Denture</a></li>
            <li><a href="#cleaning">Cleaning</a></li>
            <li><a href="#pull-tooth">Pull a tooth</a></li>
            <li><a href="#impaction">Tooth Impaction Removal</a></li>
            <li><a href="#filling">Filling</a></li>
            <li><a href="#fluoride">Fluoride Application</a></li>
        </ul>
        <hr>

        <section id="orthodontics" class="service-section">
            <h3 class="section-title">Orthodontics</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fixed metal braces</td>
                        <td>50,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Damon braces</td>
                        <td>60,000-90,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Invisalign </td>
                        <td>70,000-180,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Damon braces</td>
                        <td>60,000-90,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Self ligating (WePass)</td>
                        <td>39,000-59,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>
        
        <section id="xray" class="service-section">
            <h3 class="section-title">X-ray</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Periapical film(per film)</td>
                        <td>500 Baht</td>
                    </tr>
                    <tr>
                        <td>Bite wing film(per film)</td>
                        <td>500 Baht</td>
                    </tr>
                    <tr>
                        <td>Panoramic film(per film)</td>
                        <td>1,500 Baht</td>
                    </tr>
                    <tr>
                        <td>3D CT Scan</td>
                        <td>5,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Intraoral scanner</td>
                        <td>5,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="retainer" class="service-section">
            <h3 class="section-title">Retainer</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Retainer/Clear Retainer(per jaw)</td>
                        <td>2,500-5,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="denture" class="service-section">
            <h3 class="section-title">Denture</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Complete Denture</td>
                        <td>7,000-18,000 Baht</td>
                    </tr>
                    <tr>
                        <td>Partial Denture</td>
                        <td>5,000-12,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="cleaning" class="service-section">
            <h3 class="section-title">Cleaning</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cleaning</td>
                        <td>500-2,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="pull-tooth" class="service-section">
            <h3 class="section-title">Pull a tooth</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Extracting a tooth</td>
                        <td>800-3,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="impaction" class="service-section">
            <h3 class="section-title">Tooth Impaction Removal</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tooth Impaction</td>
                        <td>5,000-15,000 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="filling" class="service-section">
            <h3 class="section-title">Filling</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Silver filling</td>
                        <td>500 Baht</td>
                    </tr>
                    <tr>
                        <td>White filling</td>
                        <td>1,000-2,500 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="fluoride" class="service-section">
            <h3 class="section-title">Fluoride Application</h3>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fluoride Application</td>
                        <td>300-500 Baht</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
