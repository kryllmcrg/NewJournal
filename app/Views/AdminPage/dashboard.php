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
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .navbar-brand img {
            max-height: 40px;
            max-width: 160px;
        }

        .navbar-nav {
            font-weight: bold;
            text-align: center;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center; /* Center the content horizontally */
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

        .profile-section {
            display: flex;
            align-items: center;
        }

        .profile-icon {
            font-size: 24px;
            margin-right: 5px;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: -250px;
            background-color: #3c096c;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: white;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ffd700;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #ffd700;
            color: #3c096c;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
        }

        .open-btn {
            font-size: 20px;
            cursor: pointer;
            background-color: #3c096c;
            color: white;
            padding: 10px;
            border: none;
        }

        .open-btn:hover {
            background-color: #ffd700;
        }

        .main-content {
            transition: margin-left 0.5s;
            padding: 16px;
        }

        footer {
            text-align: center;
            background-color: #dabfff;
            padding: 10px;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
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

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                text-align: center;
            }

            .navbar-nav {
                margin-top: 10px;
                justify-content: flex-start; /* Adjusted to left-align the items */
            }

            .profile-section {
                margin-top: 10px;
                justify-content: flex-start; /* Adjusted to left-align the items */
            }

            .main-content {
                padding: 10px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Announcements</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="open-btn" onclick="openNav()">☰</button>
        <div class="navbar-brand">
            <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
        </div>
        <div class="navbar-nav">
            <!-- Centered and horizontal text -->
            <li class="nav-item centered-horizontal">
                <h3>CALAPAN CITY INFORMATION OFFICE</h3>
                <p>Calapan City Official Website</p>
            </li>
        </div>
        <div class="profile-section">
            <a class="nav-link" href="#">
                <i class="fa fa-user profile-icon"></i> Karylle Maca
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Your page content goes here -->
        <h2>Main Content Section</h2>
        <p>This is where your main content goes. It won't be affected by the sidebar.</p>
    </div>

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

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementsByClassName("main-content")[0].style.marginLeft = "250px";
            document.getElementsByClassName("navbar")[0].style.marginLeft = "250px";
            document.getElementsByClassName("footer-content")[0].style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-250px";
            document.getElementsByClassName("main-content")[0].style.marginLeft = "0";
            document.getElementsByClassName("navbar")[0].style.marginLeft = "0";
            document.getElementsByClassName("footer-content")[0].style.marginLeft = "0";
        }
    </script>

</body>

</html>
