<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan City Official Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            min-height: 80px;
            background-color: #dabfff;
            margin-bottom: 20px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
            max-width: 160px;
        }

        .navbar-toggler {
            color: black;
            border-color: black;
        }

        .navbar-nav {
            font-weight: bold;
            justify-content: center;
            text-align: center;
        }

        /* Centered and horizontal text */
        .centered-horizontal {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .nav-item {
            margin: 0 20px;
        }
    
        .nav-link {
            color: black !important;
            font-size: 16px;
            display: block;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            background-color: #dabfff;
            padding: 2px;
            font-size: 12px;
        }

        .footer-section {
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }

        .footer-section h3 {
            margin-bottom: 10px;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons a {
            color: #3c096c;
            font-size: 24px;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        footer {
            text-align: center;
            background-color: #dabfff;
            padding: 5px;
            margin-top: auto;
        }

    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Centered and horizontal text -->
                <li class="nav-item centered-horizontal">
                    <h3>CALAPAN CITY INFORMATION OFFICE</h3>
                    <p>Calapan City Official Website</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user"></i> Karylle Maca
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-section contact-us-section">
            <h3>Overview</h3>
            <p>Home<br>About Us<br>Contact Us<br>Announcements</p>
        </div>
        <div class="footer-section contact-us-section">
            <h3>Contact Us</h3>
            <p>Calapan City, Guibatan<br>Oriental MIMAROPA 5201<br>Phone: (123) 456-7890<br>Email:
                lgu.calapancity@gmail.com</p>
        </div>

        <div class="footer-section social-media-section">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>

        <div class="footer-section legal-section">
            <h3>Legal</h3>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>
    </div>

    <p><strong>&copy; 2024 Calapan City Official Website | All Rights Reserved</strong></p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
